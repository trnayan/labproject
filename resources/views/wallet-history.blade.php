@extends('master.master')
@section('content')


            <div class="page-inner">
               
                <div id="main-wrapper">



                    <div class="row">
                        <div class="col-md-6 user-profile">
                          <div class="title">
                                    <h3>TRANSACTION HISTORY</h3>
                                    <p>If you have any questions, check our <a href="#"> FAQ</a> or feel free to contact our support.</p>
                                </div>
                            <div class="table-responsive">
 
                           <table class="table table-dark">
  <thead>
    <tr>
      <td>CREATED</td>
                                                    <td>AMOUNT</td>
                                                    <td>STATE</td>
                                                    <td>PROVIDER</td>
                                                    <td>TYPE</td>
                                                    <td></td>
    </tr>
  </thead>
  <tbody>
             
                                       @if($history)
                                        @foreach($history as $historys)
                                                <tr>
                                                    <td>{{ $historys->created_at }}</td>
                                                    <td>${{ $historys->amount }}.00</td>
                                                    <td>{{ $historys->state }}</td>
                                                    <td>{{ $historys->provider }}</td>
                                                    <td>{{ $historys->card_type }}</td>
                                                    <td></td>
                                                </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                                    <td colspan="6">No transactions found</td> 
                                                </tr>
                                                @endif
  </tbody>
</table>
                        </div></div></div></div>
                            @endsection