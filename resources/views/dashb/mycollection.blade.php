
@extends('dashb.dashlayout')
@section('dashbody')



<div>
    <div class="row p-0 m-1">

    
           @foreach ($artworks as $artwork)

        <div class="col-lg-4 p-1" style="margin-bottom: 80px;">
            <div class="">
                <div class="col-lg-8 mb-3">
    <a href="/">
        <img 
            src="{{ asset('nexusassets/' . $artwork->image) }}" 
            alt="Listening" 
            class="img-fluid rounded" 
            style="width: 100%; height: 200px; object-fit: cover;"
        >
    </a>
</div>

                <div class="" style="padding: 10px;">
                        <p class="mb-1 md:mb-2" style="color: #6c63ff;">{{ $artwork->creator }} </p> 
                   
                    
                    <div class="d-flex align-items-center mb-2">
    <img alt="#" loading="lazy" width="20" height="20" decoding="async"
        src="{{ asset('nexusassets/weth.svg') }}" style="color: transparent; margin-right: 5px;">
    <span class="text-xs">$ {{ $artwork->price }} WETH</span>
</div>


<!--                                     
                <button class="" style="background-color: #6c63ff; color: white; padding: 10px; border-radius: 5px; border: none; cursor: pointer;">
                    Edit NFT
                </button> -->

                <form action="{{ route('updatenftprice', $artwork->id) }}" method="POST">
                @csrf
                <div class="d-flex align-items-center gap-8">
                    <input type="number" name="price" step="0.01" value="{{ $artwork->price }}" class="form-control w-100" required>
                    
                </div>
                <br>
                    <button type="submit" class="btn btn-purple">Update Price</button>
            </form>
            

                </div>

               
                
            </div>
        </div>

        
            @endforeach



        
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item"><button disabled="" class="btn btn-secondary m-1">Previous</button></li>
            <li class="page-item"><a class="btn btn-outline m-1">1</a></li>
            <li class="page-item"><button class="btn btn-secondary m-1">Next</button></li>
        </ul>
    </nav>
</div>


        @endsection()















        