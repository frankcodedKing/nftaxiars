@extends("layouts.axiarslayout")
@section("body")

<div>




<div>
    <div class="flex justify-between mx-4 sm:mx-8 py-[1rem]">
        <div>
            <h2 class="text-2xl font-semibold">Art</h2>
        </div>
    </div>
    <div class="mx-4 sm:mx-8 flex gap-[1rem] sm:gap-[1rem] mb-6">
        <div class="flex gap-1 sm:gap-2">
            <h3 class="text-[.9rem] mt-[.1rem]">Items:</h3>
            <h3 class="text-[.9rem] font-semibold mt-[.2rem]">120</h3>
        </div>
        <div class="flex gap-1 sm:gap-2">
            <h3 class="text-[.9rem] mt-[.1rem]">Volume (ETH):</h3>
            <h3 class="text-[.9rem] font-semibold mt-[.2rem]">86.30 ETH</h3>
        </div>
        <div class="flex gap-1 sm:gap-2">
            <h3 class="text-[.9rem] mt-[.1rem]">Owners:</h3>
            <h3 class="text-[.9rem] font-semibold mt-[.2rem]">64</h3>
        </div>
    </div>
    <div class="mb-6 text-gray-700 w-full sm:w-[60rem] mx-auto sm:mx-[1rem] px-4 py-8">
        <h3 class="text-[1rem] font-bold mb-1">Dive into the World of Gaming NFTs 🎨</h3>
        <p class="text-[.9rem] font-semibold leading-relaxed">Immerse yourself in the thrilling world of gaming NFTs. These digital assets can unlock exclusive in-game items, collectibles, and more. Each NFT represents a piece of gaming history or an in-game asset that you can own, trade, or showcase. 
            Step into the future of gaming with NFTs that enhance your gaming experience!
            Whether you're a seasoned collector or a curious explorer, discover the stories behind these unique pieces and own a slice of the future.</p>
    </div>
    <div class="overflow-hidden">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-9 py-4">



           @foreach ($artworks as $artwork)

                      <a href="{{ route('showart', $artwork->id) }}">

                <div class="flex flex-col rounded-lg border border-gray-200 bg-white shadow-lg overflow-hidden transform transition-transform duration-200 hover:scale-105">
                    <div class="relative w-full h-[250px] sm:h-[300px] md:h-[350px] lg:h-[400px] rounded-t-lg overflow-hidden">
                        <img alt="{{ $artwork->title }}" loading="lazy" width="400" height="400" decoding="async"
                            class="object-cover w-full h-full"
                            src="{{ asset('nexusassets/' . $artwork->image) }}"
                            style="color: transparent;">
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <h2 class="font-normal text-purple-500 text-[.9rem] mb-2">{{ $artwork->title }}</h2>
                            </div>
                            <div class="flex flex-col gap-[.7rem]">
                                <div class="flex gap-[.6rem]">
                                    <div>
                                        <img alt="#" loading="lazy" width="30" height="30" decoding="async"
                                            src="{{ asset('nexusassets/weth.svg') }}" style="color: transparent;">
                                    </div>
                                    <div>
                                        <h2 class="text-gray-900 font-bold mt-[.4rem] text-[.9rem]">{{ $artwork->price }} WETH</h2>
                                    </div>
                                </div>
                                <p class="text-gray-500 text-[.8rem]">(${{ number_format($artwork->price * 2542.31, 2) }} USD)</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-2 cursor-pointer">
                            <h2 class="text-gray-300 font-semibold text-[.9rem]">{{ $artwork->creator }}</h2>
                        </div>
                    </div>
                </div>
            @endforeach

            
          </a>
            
        </div>
    </div>
</div>

</div>

@endsection


