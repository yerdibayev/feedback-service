<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $email
 * @property ?string $phone
 * @property ?string $city
 * @property ?string $subject
 * @property ?string $message
 * @property ?string $file
 * 
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'subject',
        'message',
        'file'
    ];
}
