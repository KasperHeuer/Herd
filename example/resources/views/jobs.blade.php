<x-layout>
    <x-slot:heading>
        jobs page
    </x-slot:heading>
    <h1>Job Listings</h1>
    <ul>

        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['Id'] }}">
                    <strong>{{ $job['title'] }}</strong>: pays {{ $job['salery'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
