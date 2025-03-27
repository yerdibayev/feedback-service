<?php

namespace App\Http\Services;

use App\Models\Feedback;
use App\Repositories\FeedbackRepository;
use Illuminate\Database\Eloquent\Collection;

class FeedbackService
{
    protected $feedbackRepository;

    public function __construct(FeedbackRepository $feedbackRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
    }

    public function getAllFeedbacks(): Collection
    {
        return $this->feedbackRepository->getAllFeedbacks();
    }

    public function getFeedbackById($id): Feedback
    {
        return $this->feedbackRepository->getFeedbackById($id);
    }

    public function createFeedback($data): Feedback
    {
        return $this->feedbackRepository->createFeedback($data);
    }

    public function updateFeedback($id, $data): Feedback
    {
        return $this->feedbackRepository->updateFeedback($id, $data);
    }

    public function deleteFeedback($id): bool
    {
        return $this->feedbackRepository->deleteFeedback($id);
    }
}
