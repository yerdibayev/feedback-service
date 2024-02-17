<?php

namespace App\Http\Controllers\API;

use App\DTO\FeedbackDTO;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Services\FeedbackService;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    protected $service;

    public function __construct(FeedbackService $feedbackService)
    {
        $this->service = $feedbackService;
    }

    public function index()
    {
        $data = Feedback::all();

        return response()->json([
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $feedbackDTO = new FeedbackDTO($request->all());
        $this->service->saveFeedback($feedbackDTO);

        return response()->json(['message' => 'Message sent!']);
    }
}
