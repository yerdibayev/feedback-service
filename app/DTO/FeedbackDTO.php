<?php

namespace App\DTO;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class FeedbackDTO
{
    public $name;
    public $email;
    public $phone;
    public $city;
    public $subject;
    public $message;
    public $file;

    public function __construct(array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
            'file' => 'file|max:2048',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->city = $data['city'];
        $this->subject = $data['subject'];
        $this->message = $data['message'];
        $this->file = $data['file'];
    }
}
