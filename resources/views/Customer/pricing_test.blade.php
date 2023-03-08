@include("Dashboard.base")
@if($packages)
    @foreach($packages as $package)
        <li class="py-5 px-5">{{ $package->package_name }}

        <p class="text-xl bg-red-100 p-2">{{ $user->packagestatus->status }}</p>
            <a href="{{ route('package-details', $package->id) }}" class="bg-green-300 p-1.5">Get started</a>

        </li>

    @endforeach
@endif
