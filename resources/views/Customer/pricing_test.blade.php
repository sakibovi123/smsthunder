@include("Dashboard.base")
@if($packages)
    @foreach($packages as $package)
        <li class="py-5 px-5">{{ $package->package_name }}
            <a href="{{ route('package-details', $package->id) }}" class="bg-green-300 p-1.5">Get started</a>
        </li>

    @endforeach
@endif
