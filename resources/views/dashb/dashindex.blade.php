@extends('dashb.dashlayout')
@section('dashbody')
<style>
    .fun{
        text-align: center;
        position: absolute;
        top:60%;
        left: 40%;
    }
    .box{
        position: relative;
    }
</style>
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Account Summary
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Reports</a></li>
        <li class="breadcrumb-item active">Account Summary</li>
      </ol>
    </section> -->






	

    <!-- Main content -->
    <section class="content">
	  <div class="row">
			<div class="col-lg-7 col-md-6">
				<div style="background-color: #d8cce1; border-radius: 12px; padding: 20px; margin-bottom: 15px;">
					<!-- First Box Content -->

					<div class="row">
						<div class="col-lg-4 text-charcoal font-bold">
							<h4 style="color: black;">Account Balance</h4>
							<h3 style="color: black;"> <span class="counter">${{$funds? $funds->totalbalance : 0.01}} </span><span style="color: black; font-size: 50%; font-weight: 300;">USDT</span></h3>
						</div>
						<div class="col-lg-8 mt-20 d-flex justify-content-center align-items-end" style="z-index: 1;">
							<a type="button" class="btn btn-primary flex-fill m-1 border" href="/userdashb_deposit">Deposit</a>
							<a type="button" class="btn btn-outline-dark flex-fill m-1 border" href="/createnft">Mint</a>
							<a type="button" class="btn btn-outline-dark flex-fill m-1 border" href="/userdashb_withdrawal">Withdraw</a>
						</div>
					</div>
				</div>

				<div style="background-color: #d8cce1; border-radius: 12px; padding: 20px; margin-bottom: 15px;">
					<!-- Second Box Content -->
					
						<div class="flex flex-col justify-between gap-4 p-6 bg-light-100 rounded-xl md:p-8">
							<div class="row">
								<div class="col-4">
									<p class="text-sm" style="color: black;">Coin</p>
								</div>
								<div class="col-4">
									<p class="text-sm" style="color: black;">Ratio</p>
								</div>
								<div class="col-4">
									<p class="text-sm" style="color: black;">Amount</p>
								</div>
							</div>
							<div class="row">
								<div class="col-4">
									<div class="d-flex align-items-center gap-2"><img alt="coin" class="w-[0.65rem]" src="{{ asset('nexusassets/eth.svg') }}"
											style="width: 30px;">
										<div class="d-flex flex-column font-semibold"><span class="text-sm">ETH</span><span
												class="text-[0.65rem]">ERC20</span></div>
									</div>
								</div>
								<div class="col-4">
									<div class="d-flex flex-column gap-1 font-semibold"><span class="text-sm">95%</span><span>
											<div class="progress relative h-0.5 overflow-hidden rounded-full bg-light-200 dark:bg-neutral-800 w-[40%] w-50"
												style="height: 0.3rem;">
												<div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-primary"
													style="transform: translateX(-1.01%); width: 0%;" aria-valuenow="0"></div>
											</div>
										</span></div>
								</div>
								<div class="col-4 text-right">
									<div class="col-4 text-center">
										<div class="d-flex flex-column font-semibold"><span class="text-sm font-[900]">{{ $funds ? number_format($funds->totalbalance / 2597.18, 6) : '0.000001' }} ETH</span></div><span
											class="d-flex align-items-center justify-content-start gap-1 text-[0.5rem] font-bold">
											<!-- <span
												class="text-[0.75rem]">≈</span><span>$0.00</span></span> -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-4">
									<div class="d-flex align-items-center gap-2"><img alt="coin" class="w-[0.65rem]" src="{{ asset('nexusassets/weth.svg') }}"
											style="width: 30px;">
										<div class="d-flex flex-column font-semibold"><span class="text-sm">WETH</span><span
												class="text-[0.65rem]">ERC20</span></div>
									</div>
								</div>
								<div class="col-4">
									<div class="d-flex flex-column gap-1 font-semibold"><span class="text-sm">90%</span><span>
											<div class="progress relative h-0.5 overflow-hidden rounded-full bg-light-200 dark:bg-neutral-800 w-[40%] w-50"
												style="height: 0.3rem;">
												<div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-primary"
													style="transform: translateX(-1.01%); width: 0%;" aria-valuenow="0"></div>
											</div>
										</span></div>
								</div>
								<div class="col-4 text-right">
									<div class="col-4 text-center">
										<div class="d-flex flex-column font-semibold"><span class="text-sm font-[900]">{{ $funds ? number_format($funds->totalbalance / 2500.18, 6) : '0.000001' }} WETH</span></div><span
											class="d-flex align-items-center justify-content-start gap-1 text-[0.5rem] font-bold">
											
									</div>
								</div>
							</div>
				</div>
				





				</div>



				<div style="background-color: #d8cce1; border-radius: 12px; padding: 20px; margin-bottom: 15px;">
					<!-- First Box Content -->

					<div class="row align-items-center justify-content-between">
					<div class="col-lg-6 col-md-6 col-12 text-charcoal font-bold">
						<h4 style="color: black;">Create NFT</h4>
						<p style="color: black;">Buy and Sell NFTs from top artists</p>
					</div>

					<div class="col-lg-3 col-md-4 col-12 text-end mt-3 mt-md-0">
						<a href="/createnft" class="btn btn-primary" style="background-color: #6f42c1; border-color: #6f42c1;">
							Create
						</a>
					</div>
				</div>

				</div>
			</div>


			<div class="col-lg-5 col-md-6">

			 <div class="box" style="background-color: #d8cce1; border-radius: 12px; padding: 20px; margin-bottom: 15px;">
			<div class="">
			  <h3 class="text-dark">Recent Transactions</h3>

			  
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table no-margin">
						<tbody>
                            @if ($user_deposits->count() > 0)
                            @foreach ($user_deposits as $item)
                            <tr>
                                <td>{{$item->created_at->diffForHumans()}}</td>
                                <td>${{$item->amount}}</td>
                                <td>
                                    @if ($item->status >0)
                                    <a href='#' class='text-green hover-success'>Completed </a>
                                    @else
                                    <a href='#' class='text-yellow hover-warning'>pending</a>
                                    @endif
                                </td>
                              </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="2"><a href="{{route('userdashb_deposit')}}" class="text-dark hover-warning">No Recent Transactions</a></td>
                              </tr>
                            @endif


						</tbody>
				    </table>
				</div>
			</div>
			<!-- /.box-body -->
		  </div>

			</div>


		  </div>


		

	   </div>
	  <div class="row">



		<!--  -->

	  </div>
    </section>
    <!-- /.content -->
  </div>

@endsection()

