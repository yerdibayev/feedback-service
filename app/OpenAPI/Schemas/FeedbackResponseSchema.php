<?php

namespace App\OpenAPI\Schemas;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'FeedbackResponse',
    description: 'Feedback response',
    required: ['success', 'message', 'data'],
    properties: [
        new OA\Property(property: 'success', type: 'boolean', example: true),
        new OA\Property(property: 'message', type: 'string', example: 'success'),
        new OA\Property(
            property: 'data',
            type: 'object',
            properties: [
                new OA\Property(
                    property: 'feedback',
                    type: 'object',
                    ref: '#/components/schemas/Feedback'
                )
            ]
        )
    ]
)]
class FeedbackResponseSchema
{
} 