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

    /**
     * @OA\Get(
     *     path="/api/feedbacks",
     *     summary="Get feedbacks",
     *     description="List of feedbacks",
     *     @OA\Response(response="200", description="Get feedbacks")
     * )
     */
    public function index()
    {
        $data = Feedback::all();

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/feedbacks",
     *     summary="Creates a feedback",
     *     description="Creates a feedback",
     *     @OA\Parameter(
     *          name="name",
     *          in="query",
     *          description="Name",
     *          @OA\Schema(type="string"),
     *          required=true
     *      ),
     *      @OA\Parameter(
     *          name="email",
     *          in="query",
     *          description="Email",
     *          @OA\Schema(type="string"),
     *          required=true
     *      ),
     *     @OA\Parameter(
     *           name="phone",
     *           in="query",
     *           description="Phone",
     *           @OA\Schema(type="string")
     *       ),
     *     @OA\Parameter(
     *           name="city",
     *           in="query",
     *           description="City",
     *           @OA\Schema(type="string")
     *       ),
     *     @OA\Parameter(
     *            name="subject",
     *            in="query",
     *            description="Subject",
     *            @OA\Schema(type="string")
     *        ),
     *     @OA\Parameter(
     *             name="message",
     *             in="query",
     *             description="Message",
     *             @OA\Schema(type="string")
     *         ),
     *     @OA\Parameter(
     *             name="file",
     *             in="query",
     *             description="File",
     *             @OA\Schema(type="file")
     *         ),
     *     @OA\Response(response="201", description="Create feedback")
     * )
     */
    public function store(Request $request)
    {
        $feedbackDTO = new FeedbackDTO($request->all());
        $this->service->saveFeedback($feedbackDTO);

        return response()->json(['message' => 'Message sent!'], 201);
    }
}
