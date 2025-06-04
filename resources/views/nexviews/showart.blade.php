@extends("layouts.axiarslayout")
@section("body")

<div>
  <div class="flex flex-col lg:flex-row items-center lg:items-start lg:space-x-8 p-6 lg:p-12">
    <div class="w-full lg:w-[30rem] order-2 lg:order-1">
      <img 
        alt="{{ $artwork->title }}" 
        loading="lazy" 
        width="500" 
        height="500"
        class="object-cover rounded-lg shadow-lg max-w-full h-auto"
        src="{{ asset('nexusassets/' . $artwork->image) }}"
      >
    </div>

    <div class="w-full mb-[3rem] lg:w-1/2 space-y-6 order-1 lg:order-2">
      <h1 class="text-3xl lg:text-4xl font-bold">{{ $artwork->title }}</h1>

      <p class="text-gray-600 text-sm lg:text-[.8rem]">
        {{ $artwork->description }}
      </p>

      <div class="flex flex-col gap-[.7rem]">
        <div class="flex align-middle gap-[.6rem]">
          <div>
            <img alt="#" loading="lazy" width="30" height="30" src="{{ asset('nexusassets/weth.svg') }}">
          </div>
          <div>
            <h2 class="text-gray-900 font-bold mt-[.4rem] text-[1.2rem]">
              {{ $artwork->price }} WETH
            </h2>
          </div>
        </div>
        <p class="text-gray-500 text-[.8rem]">
          (${{ number_format($artwork->price * 2630.24, 2) }} USD)
        </p>
      </div>

      <div class="flex items-center gap-2 mb-2 cursor-pointer">
        <h2 class="text-gray-600 font-semibold text-[.9rem] lg:text-[.7rem]">
          Creator: <span class="text-purple-600 text-[.9rem]">{{ $artwork->creator }}</span>
        </h2>
      </div>

  
<form method="POST" action="{{ route('buyart', $artwork->id) }}" onsubmit="return confirm('Are you sure you want to buy this artwork for Eth {{ $artwork->price }}?');">
    @csrf
    <button type="submit" class="bg-purple-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-purple-700 transition-all text-sm mb-[3rem] lg:text-base">Buy for eth {{ $artwork->price }}</button>
</form>


    </div>
  </div>
</div>

@endsection
