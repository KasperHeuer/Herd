<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <h1>Job Listings</h1>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div class="">
                    <strong class="text-laracast">{{ $job['title'] }}</strong>: pays € {{ $job['salery'] }} per year.
                </div>
            </a>
        @endforeach
        <div class="">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
