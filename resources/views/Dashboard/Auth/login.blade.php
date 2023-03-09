@section('title') {{'Login'}} @endsection

@include("Dashboard.base")

<div class="h-screen flex flex-col items-center justify-center  mx-auto">

   
    @if(session()->has('message'))
        <div class="bg-teal-400 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold"></p>
                    <p class="text-sm">{{ session()->get('message') }}</p>
                </div>
            </div>
        </div>
    @endif
    
    <form class="bg-gray-200 p-8 rounded-md" method="POST" action="{{ URL('/login') }}">
        @csrf
        @method("POST")
        <p class="text-green-700 lg:text-3xl text-xl login-text font-semibold mb-3 mt-4 mb-8">
        Welcome to SMS Platform
    </p>
        <label class="block font-semibold" for="">Username</label>
        <input aria-label="Enter your username"
               type="text" name="name" placeholder="Username"
               class="text-sm text-gray-base w-full
							mr-3 py-5 px-4 h-2 border
							border-gray-200 rounded mb-2" />
                            <label class="block mt-3 font-semibold" for="">Password</label>
        <input aria-label="Enter your password"
               type="password" name="password" placeholder="Password"
               class="text-sm text-gray-base w-full mr-3
							py-5 px-4 h-2 border border-gray-200
							rounded mb-2" />

        <button type="submit"
                class="bg-[#032738] text-white py-2 w-full mt-4 rounded-md hover:bg-teal-800">
            Login
        </button>
        <div class="mt-5 "> <p class=""><span>Or </span> <a class="login-text hover:underline" href="/register">register now !</a></p></div>
    </form>

</div>



