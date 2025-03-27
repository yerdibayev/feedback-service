<?php

namespace App\Repositories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Collection;

class FeedbackRepository
{
    public function getAllFeedbacks(): Collection
    {
        return Feedback::all();
    }

    public function getFeedbackById($id): Feedback
    {
        return Feedback::findOrFail($id);
    }

    public function createFeedback($data): Feedback
    {
        return Feedback::create($data);
    }

    public function updateFeedback($id, $data): Feedback
    {
        $feedback = Feedback::find($id);
        $feedback->update($data);
        
        return $feedback;
    }

    public function deleteFeedback($id): bool
    {
        return Feedback::find($id)->delete();
    }
}