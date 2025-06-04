@extends('dashb.dashlayout')
@section('dashbody')


<div class="col-lg-7 col-md-6">



<div style="background-color: #d8cce1; border-radius: 12px; padding: 20px; margin-bottom: 15px;">

          <section class="flex flex-col justify-between gap-8 px-6 py-8 bg-light-100 rounded-xl md:px-8 md:py-12">
            <div class="d-flex flex-column align-items-center gap-3 md:align-items-start md:gap-4">
                <div class="position-relative aspect-square w-48 md:w-56"><img alt="qrcode" loading="lazy" decoding="async"
                        data-nimg="fill" class="w-48 md:w-56 img-fluid w-100" sizes="100vw"
                        src="https://quickchart.io/qr?text=ethereum:0xd07b995326e75c9577c3bd7c94013562c21178f1&amp;dark=5c0593&amp;ecLevel=H&amp;size=200"
                        style="height: 100%; width: 100%; inset: 0px; color: transparent;"></div>
                <p class="text-sm md:text-base text-dark">Scan QR Code to deposit</p>
            </div>
            <div class="d-flex flex-column gap-3">
                <div><span class="text-secondary">Wallet Address</span>
                    <div class="d-flex gap-2 md:gap-4"><strong
                            class="font-weight-bold text-bold bold d-xs-block text-dark bold">0xd07b995326e75c9577c3...</strong>
                        <div class="cursor-pointer">
                            <div><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                    stroke-linecap="round" stroke-linejoin="round" height="24" width="24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div><span class="text-secondary text-dark">Network</span>
                    <p class="font-weight-bold text-dark">Ethereum (ERC20)</p>
                </div>
            </div>
          </section>

  
    </div>
					

</div>


























<div class="col-lg-7 col-md-6">



<div style="background-color: #d8cce1; border-radius: 12px; padding: 20px; margin-bottom: 15px;">

    <section class="d-flex flex-column justify-content-between gap-3 px-3 py-4  rounded">
        <div class="d-flex flex-column gap-3">
            <div><span class="text-warning">Expected arrival</span>
                <p class="text-dark">12 network confirmations</p>
            </div>
            <div><span class="text-warning">Minimum deposit</span>
                <p class="text-dark">0.00003 ETH</p>
            </div>
            <div><span class="text-warning">Expected unlock</span>
                <p class="text-dark">12 network confirmations</p>
            </div>
        </div>
        <div class="d-flex flex-column gap-1">
            <h4 class="text-2xl fw-bold w-400 text-dark">Note</h4>
            <ul class="list-unstyled">
                <li>Send only ETH to this deposit address.</li>
                <li>Ensure the network is Ethereum (ERC20).</li>
            </ul>
        </div>
    </section>
</div>



					

</div>


<br>
<br>


<!--  -->



@endsection()
