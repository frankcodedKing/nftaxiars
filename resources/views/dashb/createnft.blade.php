
@extends('dashb.dashlayout')
@section('dashbody')








       <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">


                <div class="mt-4  mx-2 mb-4 p-6 bg-white rounded-xl shadow-md">

                @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                <form method="POST" action="{{ route('storenft') }}" enctype="multipart/form-data">
                    @csrf
                        <div>
                            
                        <label class="block font-800">Upload Image</label>
                        <input accept="image/*" name="image" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                type="file" required>
                            </div>
                        <div>
                            
                        <label class="block text-sm font-medium text-gray-700">NFT Title</label>
                        <input placeholder="Enter NFT Title" name="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required="" type="text" value=""></div>
                        <div>
                            
                        <label class="block text-sm font-medium text-gray-700">Creator Name</label>
                        <input placeholder="Enter User Name" name="creator" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required="" type="text" value=""></div>
                        <div>
                            
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea placeholder="Enter NFT description" name="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                rows="4" required=""></textarea></div>
                        <div>
                            
                        <label class="block text-sm font-medium text-gray-700">Category</label><select name="category" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required="">
                                <option value="" disabled="">Select a category</option>
                                <option value="Art">Art</option>
                                <option value="Gaming">Gaming</option>
                                <option value="Membership">Memberships</option>
                                <option value="PFPS">PFPS</option>
                                <option value="Photography">Photography</option>
                                <option value="Others">Others</option>
                            </select></div>
                        <div>
                            
                        <label class="block text-sm font-medium text-gray-700">Price (WETH)</label>
                        
                        <input placeholder="Enter price in WETH" name="price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required="" min="0" step="0.001" type="number" value="">
                            <p class="text-xs text-gray-500 mt-1">Minting Fee: 0.1 ETH (required balance to create NFT)</p>
                        </div>
                        <div>
                            
                        <button type="submit"
                                class="btn btn-primary border w-full px-4 py-2 rounded-md focus:outline-none bg-blue-600 hover:bg-blue-700 transition-colors duration-200 text-white" style="background-color: #6f42c1; border-color: #6f42c1;">Create
                                NFT</button></div>
                    </form>
                </div>
                        

            </div>
        </div>



        @endsection()

