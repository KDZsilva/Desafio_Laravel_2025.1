<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [ 'required','string'],
            'cpf' => [ 'required','string'],
            'data_de_nascimento' => [ 'required','date'],
            'email' => [ 'required','email', 'confirmed'],
            'foto' => ['string'],
            'password' => [ 'required','string', 'confirmed'],
            'telefone' => [ 'required','string'],
        ];
    }
}
