<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DivisaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $roles = auth()->user()->roles;

        if (in_array('superadmin', $roles))
            return true;

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|min:2|max:255',
            'simbolo' => 'required|string|min:2|max:255',
            'cambio' => 'required|numeric'
        ];
    }
}
