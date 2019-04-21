@extends('master.master')
@section('content')
            <div class="page-inner">
               
                <div id="main-wrapper">
                    <div class="row">
                       
                        <div class="col-md-4 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Book Details</div>
                                </div>
                                <div class="panel-body">
                                                                       
                                   <form>    
                                    <div class="post">
                                     <label> Choose Font Cover</label>                                     
                                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"> 
                                      <hr>
                                        <hr>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Some Info About Font Cover</div>
                                </div>
                                <div class="panel-body">
                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                          
                        </div>

                    </div>
                         <div class="col-md-4 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Mid Cover</div>
                                </div>
                                <div class="panel-body">
                                                                       
                                   <form>    
                                    <div class="post">
                                      <label> Choose Mid Cover</label>                                     
                                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"> 
                                      <hr>
                                        <hr>
                                       
                                        
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Some Info of Mid Cover</div>
                                </div>
                                <div class="panel-body">
                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                          
                        </div> 
                 </div><div class="col-md-4 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Book Back Cover</div>
                                </div>
                                <div class="panel-body">
                                                                       
                                   <form>    
                                    <div class="post">
                                      <label> Choose Back Cover</label>                                     
                                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"> 
                                      <hr>
                                        <hr>
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Some Info of Back cover</div>
                                </div>
                                <div class="panel-body">
                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                          
                        </div>
                        <div class="post-options">
                                            <button class="btn btn-primary pull-right">Submit</button>
                                        </div> 
                    </div>
                @endsection