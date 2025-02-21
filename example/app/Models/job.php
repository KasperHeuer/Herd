<?php



namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'director',
                'salery' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'programmer',
                'salery' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'teacher',
                'salery' => '$40,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job["id"] == $id);

        if (!$job) {
            abort(404, 'Job not found'); // This will now execute if no job is found.
        }

        return $job;
    }
}
