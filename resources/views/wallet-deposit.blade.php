@extends('master.master')
@section('content')
            <div class="page-inner">
               
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 user-profile">
                           <div class="container">
        <div class="centered title"><h1>Welcome to our checkout.</h1></div>
     </div>
     <hr class="featurette-divider"></hr>
         <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <div class="tab-content">
  <div id="stripe" class="tab-pane fade in active">
                       <script src='https://js.stripe.com/v2/' type='text/
                       javascript'></script>
          <form  method="POST" id="payment-form" role="form" action="{{ url('wallet-deposit/addmoney') }}" >
 {{ csrf_field() }}
            
            <br>
          <div class='form-row'>
              <div class='form-group required{{ $errors->has('amount') ? ' has-error' : '' }}'>
                <div class='error form-group hide'>
                
            </div>
                <label class='control-label'>Ammount</label>
                <input class='form-control' name="amount" placeholder="$" size='4' type='text'>
                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
              </div>
                    
            </div>
            <div class='form-row'>
              <div class='form-group card required{{ $errors->has('card_no') ? ' has-error' : '' }}'>
                  <label class='control-label'>Card Number</label>
                <input autocomplete='off' id="card_no" class='form-control card-number' size='20' type='text' name="card_no" value="{{ old('card_no') }}" autofocus>
                              @if ($errors->has('card_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('card_no') }}</strong>
                                    </span>
                                @endif

              </div>
            </div>
            
            <div class='form-row'>
              <div class='form-group cvc required{{ $errors->has('cvvNumber') ? ' has-error' : '' }}'>
                <label class='control-label'>CVC</label>
                <input id="cvvNumber" autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvvNumber" value="{{ old('cvvNumber') }}" autofocus>

                                @if ($errors->has('cvvNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cvvNumber') }}</strong>
                                    </span>
                                @endif


              </div>
              <div class='form-group expiration required{{ $errors->has('ccExpiryMonth') ? ' has-error' : '' }}'>
                <label id="ccExpiryMonth" class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'name="ccExpiryMonth" value="{{ old('ccExpiryMonth') }}" autofocus>


                                @if ($errors->has('ccExpiryMonth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ccExpiryMonth') }}</strong>
                                    </span>
                                @endif

              </div>
              <div class='form-group expiration required{{ $errors->has('ccExpiryYear') ? ' has-error' : '' }}'>
                <label class='control-label'>Year</label>
                <input id="ccExpiryYear" class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'name="ccExpiryYear" value="{{ old('ccExpiryYear') }}" autofocus>
       @if ($errors->has('ccExpiryYear'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ccExpiryYear') }}</strong>
                                    </span>
                                @endif
              </div>
            </div>
    
           
            <div class='form-row'>
              <div class='form-group'>
                         <label class='control-label'></label>
                      
               <button class='form-control btn btn-primary' type='submit'> Continue →</button>
          
               
                
              </div>
            </div>    
              </form> 
              </div>
              
                
            </div>
            
            
          
        </div>   
     
        <div class="col-sm-6">
           <label class='control-label'></label><!-- spacing -->
        
          <div class="alert alert-info">Please choose your method of payment and hit continue. You will then be sent down to pay using your selected payment option.</div>
       <br>
         <div class="btn-group-vertical btn-block">
             <a class="btn btn-default" style="text-align: left;" data-toggle="tab" href="#stripe">Stripe/Credit Card</a>
          <a class="btn btn-default" style="text-align: left;" data-toggle="tab" href="#paypal">PayPal</a>
          </div>
          
          <br><br><br>
         
         <div class="jumbotron jumbotron-flat " style="color: red">
    <div class="center"><h2><i>Current BALANCE </i></h2></div>
           <div class="paymentAmt">$@foreach($deposit as $deposits){{ $deposits->amount }}@endforeach.00 
                                        </div>
           
                 
          
        </div>
     
            <br><br><br>
        </div>
      </div>
        
            </div>
        </div>
 
        </form>
                        </div>
                      
                        
                    </div>
                </div>
               @endsection