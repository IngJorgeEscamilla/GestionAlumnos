<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
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
            //
            'nombre' => 'nullable|min:3|max:35',
            'matricula' => 'required|min:8|max:10',
            'semestre' => 'nullable|min:5|max:10',
            'email' => 'required|email',
            'telefono' => 'required|digits:10',
        ];
    }
}
