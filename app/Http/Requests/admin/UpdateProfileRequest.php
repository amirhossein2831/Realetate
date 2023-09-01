<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required',
            'username' => 'sometimes|required|unique:users',
            'phone'=>'sometimes|required|numeric',
            'address' => 'sometimes|required',
            'about' => 'sometimes|required',
            'github' => 'sometimes|required',
            'tweeter' => 'sometimes|required',
            'instagram' => 'sometimes|required',
            'profile_image' => 'sometimes|required|image',
            'header_image'=>'sometimes|required|image'
        ];
    }
}
