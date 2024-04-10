<?php

namespace App\DTO;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class FeedbackDTO
{
    private $name;
    private $email;
    private $phone;
    private $city;
    private $subject;
    private $message;
    private $file;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getFile()
    {
        return $this->file;
    }
}
