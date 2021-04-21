<?php

namespace App\Http\Requests;

class UpdateClientRequest extends ClientRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return array_merge(parent::rules(), ['email' => 'required|email']);
        // php 7.4
        /*return [
            ...parent::rules(),
            ['email' => 'required|email'],
        ];*/
    }
}
