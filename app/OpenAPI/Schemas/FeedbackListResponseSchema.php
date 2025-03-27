<?php

namespace App\OpenAPI\Schemas;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'FeedbackListResponse',
    description: 'Feedback list response',
    required: ['success', 'message', 'data'],
    properties: [
        new OA\Property(property: 'success', type: 'boolean', example: true),
        new OA\Property(property: 'message', type: 'string', example: 'success'),
        new OA\Property(
            property: 'data',
            type: 'object',
            properties: [
                new OA\Property(
                    property: 'feedbacks',
                    type: 'array',
                    items: new OA\Items(ref: '#/components/schemas/Feedback')
                )
            ]
        )
    ]
)]
class FeedbackListResponseSchema
{
} 