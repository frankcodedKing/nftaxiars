@extends("layouts.axiarslayout")
@section('body')




  <div>
    <div class="flex mx-32 mt-10 flex-col gap-4">
      
      <div class="grid place-content-center">
        <div class="border px-10 py-10 flex flex-col">
          <div class="grid place-content-center">
            <h2 class="text-lg font-semibold">Log in</h2>
          </div>
          <div class="flex justify-between gap-6 mt-6 align-middle">
            <div class="px-1 mt-3 rounded-2xl w-20 h-[0.1rem] bg-gray-500"></div>
            <h3 class="text-[.9rem] text-gray-500">Welcome Back!</h3>
            <div class="mt-3 px-2 w-20 h-[0.1rem] bg-gray-500"></div>
          </div>


          <form action="{{ route('login') }}" class="flex flex-col gap-3 mt-3" method="post">
            @csrf  
          <input placeholder="Email" class="form-control @error('email') is-invalid @enderror border w-full px-2 py-2 mb-2 placeholder:text-[.9rem]" required="" type="email" name="email" value="">
             @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

          <input placeholder="Password" class="form-control @error('password') is-invalid @enderror border w-full px-2 py-2 mb-2 placeholder:text-[.9rem]" required="" type="password" name="password" value="">
          
          @error('password')
          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                          
                                
          <button type="submit" name="login" class="bg-purple-800 py-1 text-white rounded-lg">Login</button>
        
          </form>

          <div class="flex gap-1 justify-center mt-3">
            <div class="mt-[.2rem]">
              <h3 class="text-[.9rem] text-gray-500">Need an Account?</h3>
            </div>
            <div><button class="text-[.9rem] text-purple-800 hover:underline"> <a href="/register">Sign Up </a></button></div>
                  <p class='text-danger'><a href='{{route('password.request')}}'>Forgot Password?</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>
  
 

@endsection
