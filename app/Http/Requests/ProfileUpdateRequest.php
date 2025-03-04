<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user()->id)],
            'telephone' => ['required', 'string', 'max:20'], // Validation pour le numéro de téléphone
            'siret' => ['required', 'string', 'max:20'],     // Validation pour SIRET
            'tva' => ['required', 'string', 'max:20'],       // Validation pour TVA
        ];
    }
}