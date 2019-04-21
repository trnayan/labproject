<?php


namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Stripe\Error\Card;
use DB;
use Auth;
class AddMoneyController extends Controller
{
    
    public function __construct()
    {
          $this->middleware('auth');
    }
    
    /**
     * Show the application paywith stripe.
     *
     * @return \Illuminate\Http\Response
     */
    public function payWithStripe()
    {
        return view('wallet-deposit');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPaymentWithStripe(Request $request)
    {


       // dd($request);
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            'amount' => 'required',
        ]);
        
        $input = $request->all();
        if ($validator->passes()) {           
            $input = array_except($input,array('_token'));            
            $stripe = Stripe::make('sk_test_Xln1ZTpQWm713TB5swZoCglx');
            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number'    => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year'  => $request->get('ccExpiryYear'),
                        'cvc'       => $request->get('cvvNumber'),
                
                    ],
                ]);

                if (!isset($token['id'])) {
                    \Session::put('error','The Stripe Token was not generated correctly');
                    return redirect('wallet-history');
                }
                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'USD',
                    'amount'   => $request->get('amount'),
                    'description' => 'Add in wallet',
                ]);



                if($charge['status'] == 'succeeded') {
                   
				    $exists = DB::table('deposit')
												->select('deposit.*')
												->where('deposit.user_id', '=', auth()->id())
            									->increment('amount', $request->input('amount'));
            									

				if(!$exists){
   
					$data = DB::table('deposit')
				        					->insertGetId(array(
									            'user_id' => Auth::user()->id,
									            "amount" =>$request->input('amount') ,
									            "created_at" =>  now(), # \Datetime()
									            "updated_at" => now(),  # \Datetime()
				        					));

							}

						
					$history = DB::table('wallet_history')
				        					->insertGetId(array(
									            'user_id' => Auth::user()->id,
									            "card_no" =>$request->input('card_no') ,
									            "expiry_month" =>$request->input('ccExpiryMonth') ,
									            "expiry_year" =>$request->input('ccExpiryYear') ,
									            "cvv" =>$request->input('cvvNumber') ,
									            "amount" =>$request->input('amount') ,
									            "card_type" =>'Credited' ,
									            "provider" =>$request->input('provider') ,
									            "state" =>$request->input('state') ,
									            "created_at" =>  now(), # \Datetime()
									            "updated_at" => now(),  # \Datetime()

				        					));


                                Session::put('success','Money add successfully in wallet');
                                return redirect('wallet-history');
                            } 

                            else {
                                Session::put('error','Money not add in wallet!!');
                                return redirect('wallet-history');
                            }

            } catch (Exception $e) {
                Session::put('error',$e->getMessage());
                return redirect('wallet-history');
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                Session::put('error',$e->getMessage());
                return redirect('wallet-history');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                Session::put('error',$e->getMessage());
                return redirect('wallet-history');
            }
        }
        Session::put('error','All fields are required!!');
        return redirect('wallet-history');
    }    
}