<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Http\Resources\FeedbackCollection;
use App\Http\Resources\FeedbackResource;
use App\Http\Services\FeedbackService;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;

class FeedbackController extends Controller
{
    use ApiResponser;
    protected $service;

    public function __construct(FeedbackService $feedbackService)
    {
        $this->service = $feedbackService;
    }

    public function index(): JsonResponse
    {
        try {
            $feedbacks = $this->service->getAllFeedbacks();

            return $this->successResponse('Feedbacks fetched successfully', 200, FeedbackCollection::collection($feedbacks));
        } catch (\Exception $e) {
            return $this->errorResponse('Failed to fetch feedbacks', $e);
        }
    }

    public function show($feedback_id): JsonResponse
    {
        try {
            $feedback = $this->service->getFeedbackById($feedback_id);

            return $this->successResponse('Feedback fetched successfully', 200, FeedbackResource::make($feedback));
        } catch (\Exception $e) {
            return $this->errorResponse('Failed to fetch feedback', $e);
        }
    }

    public function store(FeedbackRequest $request): JsonResponse
    {
        try {
            $feedback = $this->service->createFeedback($request->all());

            return $this->successResponse('Message sent!', 201, FeedbackResource::make($feedback));
        } catch (\Exception $e) {
            return $this->errorResponse('Failed to send message', $e);
        }
    }

    public function update(FeedbackRequest $request, $feedback_id): JsonResponse
    {
        try {
            $feedback = $this->service->updateFeedback($feedback_id, $request->all());

            return $this->successResponse('Feedback updated successfully', 200, FeedbackResource::make($feedback));
        } catch (\Exception $e) {
            return $this->errorResponse('Failed to update feedback', $e);
        }
    }

    public function delete($feedback_id): JsonResponse
    {
        try {
            $this->service->deleteFeedback($feedback_id);

            return $this->successResponse('Feedback deleted successfully', 200);
        } catch (\Exception $e) {
            return $this->errorResponse('Failed to delete feedback', $e);
        }
    }
}
