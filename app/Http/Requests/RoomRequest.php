<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoomRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number' => [
                'required',
                'size:3',
                Rule::unique('rooms', 'number')->ignore($this->room),
            ],
            'name' => 'required|max:100',
        ];
    }
}
