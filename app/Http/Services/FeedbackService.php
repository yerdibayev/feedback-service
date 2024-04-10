<?php

namespace App\Http\Services;

use App\Models\Feedback;
use App\DTO\FeedbackDTO;

class FeedbackService
{
    public function saveFeedback(FeedbackDTO $feedbackDTO): Feedback
    {
        $feedback = new Feedback();
        $feedback->name = $feedbackDTO->getName();
        $feedback->email = $feedbackDTO->getEmail();
        $feedback->phone = $feedbackDTO->getPhone();
        $feedback->city = $feedbackDTO->getCity();
        $feedback->subject = $feedbackDTO->getSubject();
        $feedback->message = $feedbackDTO->getMessage();

        if ($feedbackDTO->getFile()) {
            $path = $feedbackDTO->getFile()->store('feedback_files');
            $feedback->file = $path;
        }

        $feedback->save();

        return $feedback;
    }
}
