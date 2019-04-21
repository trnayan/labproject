@extends('master.master')
@section('content')
            <div class="page-inner">
               
                <div id="main-wrapper">
                    <div class="row">
                       

                   
                         <div class="col-md-4 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Book </div>
                                </div>
                                <div class="panel-body">
                                                                       
                                   <form method="post" action="{{ url('allview/add') }}"> 
                                     {{ csrf_field() }} 
                                    <div class="post">
                                      <label> Select Book Number </label>                                     
                                      <div class="form-group">
    
    <select name="chapter" class="form-control" id="exampleFormControlSelect1">

      <option value="1" >1</option>
      <option value="2" >2</option>
      <option value="3" >3</option>
      <option value="4" >4</option>
      <option value="5" >5</option>
      <option value="6" >6</option>
      
    </select>
  </div>
                             <input type="submit" name="submit">          
                                        
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
                 </div>
                 <div class="col-md-4 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Book Back Cover</div>
                                </div>
                                <div class="panel-body">
                                                                       
                                   <form>    
                                    <div class="post">
                                      <label> Choose Manual Front Cover</label>                                     
                                     <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="http://lorempixel.com/75/50/abstract/">
      0123 4567 8912 3456
      <span class="glyphicon glyphicon-chevron-down"></span>
    </button>
    
    <ul class="dropdown-menu">
      <li class="dropdown-header">Member name (you)</li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
      <li class="dropdown-header">Member name</li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
    </ul>
  </div>
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

                    </div>
                     <div class="col-md-4 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Mid Cover</div>
                                </div>
                                <div class="panel-body">
                                                                       
                                   <form>    
                                    <div class="post">
                                      <label> Select Chapter </label>                                     
                                      <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="http://lorempixel.com/75/50/abstract/">
      0123 4567 8912 3456
      <span class="glyphicon glyphicon-chevron-down"></span>
    </button>
    
    <ul class="dropdown-menu">
      <li class="dropdown-header">Member name (you)</li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
      <li class="dropdown-header">Member name</li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
    </ul>
  </div>
                                       
                                        
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
                 </div>
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>                                             

                   
                </div>
                </div></div></form></div>
                @endsection