@extends('master.master')
@section('content')

            <div class="page-inner">
               
                <div id="main-wrapper">
                    <div class="row">
                        
                        <div class="col-md-3 user-profile">
    
                           
                            <ul class="list-unstyled text-center">
                                <div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>Trending <b>Book</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- Carousel indicators -->
             
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">
                                                    
                        <div class="col-sm-6">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Sample 1</h4>
                                    
                                    
                                    
                                    <button type="button" id="pic" class="btn btn-dark">Add</button>
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
            
        </div>
        </div>
    </div>
</div>
                            </ul>
                            <hr>
                            <button class="btn btn-primary btn-block"><i class="fa fa-plus m-r-xs"></i>Secure dashboard</button>
                        </div>
                        <div class="col-md-6 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-body">
                                    
                                
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#red').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/red" width="420" height="680"></iframe>');
        }
    });   
});
</script>
 
 <script type="text/javascript">
$(function(){
    $('#blue').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/blue" width="420" height="680"></iframe>');
        }
    });   
});
</script>
 
 <script type="text/javascript">
$(function(){
    $('#blun').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/blun" width="420" height="680"></iframe>');
        }
    });   
});
</script>
 
 <script type="text/javascript">
$(function(){
    $('#dark').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/dark" width="420" height="680"></iframe>');
        }
    });   
});
</script>
 
 <script type="text/javascript">
$(function(){
    $('#green').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/green" width="420" height="680"></iframe>');
        }
    });   
});
</script>
 
 <script type="text/javascript">
$(function(){
    $('#light').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/light" width="420" height="680"></iframe>');
        }
    });   
});
</script>
 
 <script type="text/javascript">
$(function(){
    $('#grey').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/grey" width="420" height="680"></iframe>');
        }
    });   
});
</script>
 
 <script type="text/javascript">
$(function(){
    $('#yellow').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/yellow" width="420" height="680"></iframe>');
        }
    });   
});
</script>

 <script type="text/javascript">
$(function(){
    $('#pic').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" name="iframe" src="http://localhost:8000/allview" width="420" height="680"></iframe>');
        }
    });   
});
</script>

<div id="iframeHolder">
    
   
</div>
<div id="iframeHolder">
    
   
</div>
<!-- <div id="app" class="container-fluid" style="margin-top: 20px;">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <ol class="breadcrumb pull-left" style="margin-bottom: 0;">
                
                <li>
                    <router-link to="/iframe">Iframe</router-link>
                </li>
              <li>
                    <router-link to="/green">green</router-link>
                </li>
                <li>
                    <router-link to="/red">red</router-link>
                </li>
            </ol>

            <button class="btn btn-danger pull-right" @click="back" v-if="$route.name !== 'home'">Back</button>
        </div>
        <div class="panel-body">
            <router-view></router-view>
        </div>
    </div>
</div>

<script src="https://cdn.bootcss.com/vue/2.5.9/vue.js"></script>
<script src="https://cdn.bootcss.com/vue-router/3.0.1/vue-router.js"></script>

<script type="text/x-template" id="home">
    <h1>This is a home!</h1>
</script>

<script type="text/x-template" id="iframe">
    <div style="background-color: green; height:680px; width: 480px;">
        kkk
    </div>
</script>
<script type="text/x-template" id="red">
    <div style="background-color: red; height:680px; width: 480px;">
        kkk
    </div>
</script>

<script type="text/x-template" id="green">
    <div style="background-color: red; height:680px; width: 480px;">
        kkk
    </div>
</script>
<script>
    const Home = Vue.component('Home', {
        template: '#home'
    });

    const Iframe = Vue.component('Iframe', {
        template: '#iframe',
        data() {
            return {
                src: ''
            };
        },
        methods: {
            set(src) {
                this.src = src;
            }
        }
    });
const Green = Vue.component('Green', {
        template: '#green',
        data() {
            return {
                src: ''
            };
        },
        methods: {
            set(src) {
                this.src = src;
            }
        }
    });
const Red = Vue.component('Red', {
        template: '#red',
        data() {
            return {
                src: ''
            };
        },
        methods: {
            set(src) {
                this.src = src;
            }
        }
    });
    const routes = [
        {path: '/', component: Home, name: 'home'},
        {path: '/iframe', component: Iframe, name: 'iframe'},
      
        {path: '/green', component: Green, name: 'iframe'},
        {path: '/red', component: Red, name: 'red'}
   
    ];

    const router = new VueRouter({
        routes
    });

    const app = new Vue({
        router,
        methods: {
            back() {
                this.$router.go(-1);
            }
        }
    }).$mount('#app')
</script>

 -->
                                    </div>
                                </div>
                            </div>
                          
                       
                        <div class="col-md-3 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Book Details</div>
                                </div> 

                                 
                                <div class="panel-body">
                                                                       
                                   <form method="POST" action="{{ url('design/add') }}">  
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                     <input type="text" name="book_name" placeholder="Book Name">
                                        <br><hr>
                                        <input type="text" name="book_author" placeholder="Author" ><br><hr>
                                        <input type="text" name="chapter" placeholder="chapter"><br><hr>
                                       
                                         <h3 class="text-center">Select Color</h3>
                               <input type="Checkbox" name="color" value="1"> <button type="button" id="blue" class="btn btn-primary">Blue</button>
        
                               <input type="Checkbox" name="color" value="2"><button type="button" id="grey" class="btn btn-secondary">Grey</button>
        
                               <input type="Checkbox" name="color" value="3"><button type="button" id="green" class="btn btn-success">Green</button>
        
                               <input type="Checkbox" name="color" value="4"><button type="button" id="red" class="btn btn-danger">Red</button> <br> <br>
        
                               <input type="Checkbox" name="color" value="5"><button type="button" id="yellow" class="btn btn-warning">Yellow</button>
        
                               <input type="Checkbox" name="color" value="6"><button type="button" id="bluen" class="btn btn-info">Blue</button>
        
                               <input type="Checkbox" name="color" value="7"><button type="button" id="light" class="btn btn-light">Light</button>
        
                               <input type="Checkbox" name="color" value="8"><button type="button" id="dark" class="btn btn-dark">Dark</button>

                                     <input type="submit" name="submit" lass="btn btn-default pull-right">  
                                </form>       
                                    
                                </div>
                            </div>
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Color selector</div>
                                </div>
                                <div class="panel-body">
                                    
        
                            <hr>
                                </div>
                            </div>
                             
                                           
                                            
                                        
                                    
                          
                        </div>
                    </div>
                          
                                   
                               
                            </div>
                    </div>
                </div>



 @endsection