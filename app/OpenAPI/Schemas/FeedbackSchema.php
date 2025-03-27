<?php

namespace App\OpenAPI\Schemas;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'Feedback',
    description: 'Feedback model',
    required: ['id', 'name', 'email', 'phone', 'city', 'subject', 'message'],
    properties: [
        new OA\Property(property: 'id', type: 'integer', format: 'int64', example: 1),
        new OA\Property(property: 'name', type: 'string', example: 'John Doe'),
        new OA\Property(property: 'email', type: 'string', example: 'john@example.com'),
        new OA\Property(property: 'phone', type: 'string', nullable: true, example: '1234567890'),
        new OA\Property(property: 'city', type: 'string', nullable: true, example: 'New York'),
        new OA\Property(property: 'subject', type: 'string', nullable: true, example: 'Test Subject'),
        new OA\Property(property: 'message', type: 'string', nullable: true, example: 'This is a test message'),
        new OA\Property(property: 'file', type: 'string', nullable: true, example: 'https://example.com/file.pdf'),
        new OA\Property(property: 'created_at', type: 'string', example: '2021-01-01 00:00:00'),
        new OA\Property(property: 'updated_at', type: 'string', example: '2021-01-01 00:00:00'),
    ]
)]
class FeedbackSchema
{
}