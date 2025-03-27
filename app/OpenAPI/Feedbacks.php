<?php

namespace App\OpenAPI;

/**
 * @OA\Tag(
 *     name="Feedbacks",
 *     description="API Endpoints for Feedback management"
 * )
 */
class Feedbacks
{
    /**
     * @OA\Get(
     *     path="/api/feedbacks",
     *     summary="Get feedbacks",
     *     tags={"Feedbacks"},
     *     description="List of feedbacks",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/FeedbackListResponse")
     *     ),
     * )
     */
    public function index() {}

    /**
     * @OA\Get(
     *     path="/api/feedbacks/{feedback_id}",
     *     summary="Get feedback by ID",
     *     tags={"Feedbacks"},
     *     description="Get feedback by ID",
     *     @OA\Parameter(
     *         name="feedback_id",
     *         in="path",
     *         description="Feedback ID",
     *         required=true
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/FeedbackResponse")
     *     ),
     * )
     */
    public function show() {}

    /**
     * @OA\Post(
     *     path="/api/feedbacks",
     *     summary="Creates a feedback",
     *     tags={"Feedbacks"},
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
     *     @OA\Response(
     *         response=201,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/FeedbackResponse")
     *     ),
     * )
     */
    public function store() {}

    /**
     * @OA\Put(
     *     path="/api/feedbacks/{feedback_id}",
     *     summary="Updates a feedback",
     *     tags={"Feedbacks"},
     *     description="Updates a feedback",
     *     @OA\Parameter(
     *         name="feedback_id",
     *         in="path",
     *         description="Feedback ID",
     *         required=true
     *     ),
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
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/FeedbackResponse")
     *     ),
     * )
     */
    public function update() {}

    /**
     * @OA\Delete(
     *     path="/api/feedbacks/{feedback_id}",
     *     summary="Deletes a feedback",
     *     tags={"Feedbacks"},
     *     description="Deletes a feedback",
     *     @OA\Parameter(
     *         name="feedback_id",
     *         in="path",
     *         description="Feedback ID",
     *         required=true
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     * )
     */
    public function destroy() {}
}
