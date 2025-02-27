<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2>{{ $job->title }}</h2>

    <p>
        this job pays €{{ $job->salery }} per year
    </p>

    <p class='mt-6'>
        <x-button href='/jobs/{{ $job->id }}/edit'>
            Edit Job
        </x-button>
    </p>
</x-layout>
