<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use DB;
Use App\post;
use ChallongeAPI;
use View;
use Auth;
use PDF;


class PageController extends Controller
{
    function wallet_history ()      {

                            $history = DB::table('wallet_history')
                                                ->select('wallet_history.*')
                                                ->where('wallet_history.user_id', '=', auth()->id())
                                                ->get();

return view('wallet-history',['history' => $history]);        
                            
   }



public function store(request $request)
{
//dd($request);
$data= $request->title;
$data1=$data.'Nayan';
//dd($data1);

//$request -> file ('image');
//$request->image->store('public');
//Storage::putfile('public/image',$request -> file ('image'));

//dd($request->hasFile(image));
if(!$request->hasFile('image')){

 //$filename = $request->file('image')->getClientOriginalName();

 //$request->file('image')->storeAs('public/upload',$filename);
 // $request->image->store('public');
//Storage::putfile('public/image',$request -> file ('image'));





$history = DB::table('post')
                                            ->insertGetId(array(
                                                'user_id' => Auth::user()->id,
                                                
                                                "title" =>$data1,
                                                "sub_title" => $request->sub_title,
                                                "chapter" => $request->chapter,
                                                 "book" =>$request->book,
                                               
                                                "image" => $filepath,
                                                "slug" => $request->title,
                                                 "body" => $request->body,
                                                "created_at" =>  now(), # \Datetime()
                                                "updated_at" => now(),  # \Datetime()

                                            ));
//dd($request->title);

}
return redirect('/');
}

public function show($id)
{
/*
$post = Post::find($slug);
return view('blog.show',compact('post'));
*/
  $post = DB::table('post')
                                                ->select('post.*')
                                                ->where('post.id', '=', $id)
                                                ->first();




  $pdf = PDF::loadView('post', ['post' => $post]);
    return $pdf->download('card.pdf');


return view('post',compact('post'));
}

function allview ()      {

return view('allview');        
                            
   }

function allviewStore (Request $request)      {

$post = DB::table('post')
                                                ->select('post.*')
                                                ->where('post.book', '=', $request->chapter)
                                                ->get();
//dd($post);

 $pdf = PDF::loadView('fullPage', ['post' => $post]);
 return $pdf->download('book_'. $request['chapter'] . '_print.pdf');

/*$save= file_put_contents('book_'. $request['chapter'] . '_print.pdf', $pdf->output());
*/


return view('allview');        
                            
   }
function addDesign (Request $request)      {



$history = DB::table('designs')
                                            ->insertGetId(array(
                                                'name' => $request->book_name,
                                                
                                                "author" =>$request->book_author,
                                                "book_id" => $request->chapter,
                                                "color" => $request->color,
                                                
                                                "created_at" =>  now(), # \Datetime()
                                                "updated_at" => now(),  # \Datetime()

                                            ));

if($request->color == 1){

  $post = DB::table('designs')
                                                ->select('designs.*')
                                                
                                                ->first();
//dd($post);

 $pdf = PDF::loadView('color.blue', ['post' => $post]);

 return $pdf->download('book_'. $request['name'] . '_print.pdf');

}


else if($request->color == 2){

  $post = DB::table('designs')
                                                ->select('designs.*')
                                                
                                                ->first();
//dd($post);

 $pdf = PDF::loadView('color.grey', ['post' => $post]);
 
 return $pdf->download('book_'. $request['name'] . '_print.pdf');

}

else if($request->color == 3){

  $post = DB::table('designs')
                                                ->select('designs.*')
                                                
                                                ->first();
//dd($post);

 $pdf = PDF::loadView('color.green', ['post' => $post]);
 
 return $pdf->download('book_'. $request['name'] . '_print.pdf');

}

else if($request->color == 4){

  $post = DB::table('designs')
                                                ->select('designs.*')
                                                
                                                ->first();
//dd($post);

 $pdf = PDF::loadView('color.red', ['post' => $post]);
 
 return $pdf->download('book_'. $request['name'] . '_print.pdf');

}

else if($request->color == 5){

  $post = DB::table('designs')
                                                ->select('designs.*')
                                                
                                                ->first();
//dd($post);

 $pdf = PDF::loadView('color.yellow', ['post' => $post]);
 
 return $pdf->download('book_'. $request['name'] . '_print.pdf');

}

return view('allview');        
                            
   }
}
