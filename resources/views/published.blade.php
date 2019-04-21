@extends('master.master')
@section('content')
            <div class="page-inner">
               
                <div id="main-wrapper">
                    <div class="row">
                       

                   
                         <div class="col-md-4 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Add Book</div>
                                </div>
                                <div class="panel-body">
                                                                       
                                   <form>    
                                    <div class="post">
                                      <label> Choose Book</label>                                     
                                      <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="http://lorempixel.com/75/50/abstract/">
      0123 4567 8912 3456
      <span class="glyphicon glyphicon-chevron-down"></span>
    </button>
    
    <ul class="dropdown-menu">
      <li class="dropdown-header">Book name</li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
      <li class="dropdown-header">Book name</li>
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
                                    <div class="panel-title">Some Info of Select Book</div>
                                </div>
                                <div class="panel-body">
                                    <p>Select book only one time and published for buy. </p>
                                </div>
                            </div>
                          
                        </div> 
                 </div>
                 <div class="col-md-4 m-t-lg">
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <div class="panel-title">Publisher Name</div>
                                </div>
                                <div class="panel-body">
                                                                       
                                   <form>    
                                    <div class="post">
                                      <label> Choose publisher</label>                                     
                                     <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="http://lorempixel.com/75/50/abstract/">
      0123 4567 8912 3456
      <span class="glyphicon glyphicon-chevron-down"></span>
    </button>
    
    <ul class="dropdown-menu">
      <li class="dropdown-header">Publisher name</li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="http://lorempixel.com/75/50/abstract/">0123 4567 8912 3456</a>
      </li>
      <li class="dropdown-header">Publisher name</li>
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
                                    <div class="panel-title">Some Info of Publisher</div>
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
                                                                       
                           <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Elf Cafe</strong>
                        <br>
                        2135 Sunset Blvd
                        <br>
                        Los Angeles, CA 90026
                        <br>
                        <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: </em>
                    </p>
                    <p>
                        <em>Receipt #: </em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>#</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Baked Rodopa Sheep Feta</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 2 </td>
                            <td class="col-md-1 text-center"></td>
                            <td class="col-md-1 text-center"></td>
                        </tr>
                      
                      
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>$6.94</strong>
                            </p>
                            <p>
                                <strong>$6.94</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>$31.53</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>                                             

                   
                </div>
                </div></div></form></div>
                @endsection