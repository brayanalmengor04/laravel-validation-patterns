<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "firstname" => "required|min:2|max:15",
            "lastname" => "required|min:2|max:15",
            "email" => "required|email",
            "password" => "required|min:8"
        ];
    } 

    public function message(): array
    {
        return [
            "firstname.required" => "First name is required.",
            "firstname.min" => "First name must be at least 2 characters.",
            "firstname.max" => "First name cannot exceed 15 characters.",
            "lastname.required" => "Last name is required.",
            "lastname.min" => "Last name must be at least 2 characters.",
            "lastname.max" => "Last name cannot exceed 15 characters.",
            "email.required" => "Email is required.",
            "email.email" => "Please provide a valid email address.",
            "password.required" => "Password is required.",
            "password.min" => "Password must be at least 8 characters."
        ];
    }
}
