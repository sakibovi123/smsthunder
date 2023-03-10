@include("Dashboard.base")

<div class="container mx-auto py-7">
    @if(session()->has('message'))
        <p class="bg-red-200 p-2 text-lg mx-auto">{{ session()->get('message') }}</p>
    @endif

    <form action="{{ url('/checkout/'.$package_details->id) }}" method="POST">
        @csrf
        @method('POST')
        <h1>{{ $package_details->package_name }}</h1><br>
        <p>{{ $package_details->price }}</p>

        <button type="submit" class="bg-slate-700 p-1.5 rounded shadow-lg text-white">Purchase</button>
    </form>


</div>
