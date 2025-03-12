<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Job;
use App\Models\User;

class JobPolicy
{
    public function edit(User $user, Job $job): bool
    {
        // Check if job has an employer relation
        if (!$job->employer) {
            return false;
        }
        
        // Check if employer has a user relation
        if (!$job->employer->user) {
            return false;
        }
        
        // Check if authenticated user is the job's employer
        return $job->employer->user->id === $user->id;
    }
}