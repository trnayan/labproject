@extends('master.master')
@section('content')
            </div><!-- Page Sidebar -->
             <div class="page-inner">
                <div class="page-title">
                    <h3>Invoice</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="#">Extra</a></li>
                            <li class="active">Invoice</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="invoice col-md-12">
                            <div class="panel panel-dark">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1 class="m-b-md"><b>Modern</b></h1>
                                            <address>
                                                Melbourne, Australia<br>
                                                P: (123) 456-7890
                                            </address>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <h1>INVOICE</h1>
                                            <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                            <p>
                                                <strong>Invoice to</strong><br>
                                                John Doe<br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Description</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Item One</td>
                                                        <td>Lorem ipsum dolor sit amet</td>
                                                        <td>23</td>
                                                        <td>$3157</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Two</td>
                                                        <td>Consectetur adipiscing elit</td>
                                                        <td>13</td>
                                                        <td>$940</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Three</td>
                                                        <td>Eget porttitor lorem</td>
                                                        <td>36</td>
                                                        <td>$2080</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Four</td>
                                                        <td>Integer molestie lorem at massa</td>
                                                        <td>29</td>
                                                        <td>$1105</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Thank you !</h3>
                                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <img src="assets/images/signature.png" height="150" class="m-t-lg" alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-right">
                                                <h4 class="no-m m-t-sm">Subtotal</h4>
                                                <h2 class="no-m">$7282</h2>
                                                <hr>
                                                <h4 class="no-m m-t-sm">Shipping</h4>
                                                <h2 class="no-m">$240</h2>
                                                <hr>
                                                <h4 class="no-m m-t-md text-success">Total</h4>
                                                <h1 class="no-m text-success">$7522</h1>
                                                <hr>
                                                <button class="btn btn-success">Success Payment</button>
                                            </div>
                                        </div>
                                    </div><!--row-->
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                @endsection