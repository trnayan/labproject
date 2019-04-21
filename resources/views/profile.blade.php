@extends('master.master')
@section('content')
 

            <div class="page-inner">
               
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 user-profile">
                            <h3 class="text-center"> {{ Auth::user()->name }}  {{ Auth::user()->last_name }}</h3>
                            <p class="text-center"> {{ Auth::user()->dob }}</p>
                            <hr>
                            <ul class="list-unstyled text-center">
                                <li><p><i class="fa fa-map-marker m-r-xs"></i> {{ Auth::user()->city }},  {{ Auth::user()->country }}</p></li>
                                <li><p><i class="fa fa-envelope m-r-xs"></i><a href="#"> {{ Auth::user()->email }}</a></p></li>
                                <li><p><i class="fa fa-link m-r-xs"></i><a href="#">www.makeabook.com</a></p></li>
                            </ul>
                            <hr>
                            <button class="btn btn-primary btn-block"><i class="fa fa-plus m-r-xs"></i>Secure Dashboard</button>
                        </div>
                        <div class="col-md-6 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-body">
                                    
                                   <form method="POST" enctype= "multipart/form-data" action="{{ url('post/add') }}">

  
  {{ csrf_field() }}
    
                                    <div class="post">
                                     <input type="text" name="title" placeholder="Title" maxlength="200" size="70">
                                        <br><hr>
                                        <input type="text" name="sub_title" placeholder="sub-title" maxlength="200" size="70"><br><hr>
                                        <input type="text" name="book" placeholder="Book" maxlength="200" size="70">
                                        <input type="text" name="chapter" placeholder="Chapter" maxlength="200" size="70">
                                        <hr>
                                       <label> Choose Thumbline (255px X 312px,Max 20byte)</label>                                     
                                     <!--  <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">  -->
                                      <hr>

                                        <textarea name="body" id="editor1" rows="10" cols="80">
                                            
                                        </textarea>
                                        <script>
                                           CKEDITOR.replace( 'editor1' );
                                        </script>

                                        <div class="post-options">
                                            <button type="submit" class="btn btn-default pull-right">Post</button>
                                        </div> 
                                    </form>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <div class="col-md-3 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Team</div>
                                </div>
                                <div class="panel-body">
                                    <div class="team">
                                        <div class="team-member">
                                           <div class="online on"></div>
                                            <img src="assets/images/avatar1.png" alt="">
                                        </div>
                                        <div class="team-member">
                                           <div class="online off"></div>
                                            <img src="assets/images/avatar2.png" alt="">
                                        </div>
                                        <div class="team-member">
                                           <div class="online on"></div>
                                            <img src="assets/images/avatar3.png" alt="">
                                        </div>
                                        <div class="team-member">
                                           <div class="online on"></div>
                                            <img src="assets/images/avatar5.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Some Info</div>
                                </div>
                                <div class="panel-body">
                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                          
                        </div>
                          <div class="profile-timeline">
                                <ul class="list-unstyled">
                                    <li class="timeline-item">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Trending <b>Book</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">

                        @foreach($posts as $post)
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="storage/upload/{{$post->image}}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content" >
                                    <h4>Chapter Title : {{ $post->title }}</h4>
                                    <h5>Chapter Sub Totle : {{ $post->sub_title }}</h5>

                                    <h5>Book : {{ $post->book }}</h5>
                                                 
                                    <h5>Chapter : {{ $post->chapter }}</h5>
                                                                       
                                    <a  href="/post/{{$post->id}}" target="_blank" class="btn btn-primary" style="float: right;" >See Chapter</a>
                                </div>                      
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Sony Play Station</h4>
                                    <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                                             
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Apple iPhone</h4>
                                    <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>                      
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        </div>
    </div>
</div>
                                  </li> 
                                </ul>
                            </div>
                    </div>
            
               @endsection