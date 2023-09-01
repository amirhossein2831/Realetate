<?php

namespace App\Http\Requests\admin;

use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
                'name'=>'sometimes|required',
                'username'=>['sometimes','required',Rule::unique('users')->ignore(Auth::id())],
                'phone'=>'sometimes|required|numeric',
                'address'=>'sometimes|required',
                'about'=>'sometimes|required',
                'github' => 'sometimes|required|url',
                'tweeter' => 'sometimes|required|url',
                'instagram' => 'sometimes|required|url',
                'header_image'=>'sometimes|required|image',
                'profile_image'=>'sometimes|required|image',
            ];
    }
}
