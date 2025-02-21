<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2>{{ $job['title'] }}</h2>

    <p>
        this job pays {{ $job['salery'] }} per year
    </p>
</x-layout>
