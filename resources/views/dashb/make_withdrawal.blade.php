@extends('dashb.dashlayout')
@section('dashbody')




  <!-- Main content -->
  <section class="content">

   <div class="row">

       <div class="col-lg-12 col-12">

           <div class="row">

             

              <div class="col-lg-6 col-12">
                  
                    <div class="box-content">
                      <div class="box-body">
                        <form action="{{route('userdashb_withdrawal_post')}}" method="post" >
                            @csrf
                          <div class="form-group row">
                              <label class="col-12" for="login1-username">Enter address</label>
                              <div class="col-12">
                                  <input type="text" required class="form-control" placeholder="enter Ethereum address" name="btcaddress" value="">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-12" for="lock1-password1">Amount (in usd)</label>
                              <div class="col-12">
                                  <input type="number" required class="form-control" id="lock1-password1" name="amount" placeholder="Enter Amount in USD">
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-12">
                                  <button type="submit" class="btn btn-success">
                                      <i class="fa fa-arrow-right mr-5"></i> Proceed with withdrawal
                                  </button>
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
              </div>


           </div>

       </div>

    </div>

  </section>



@endsection()
