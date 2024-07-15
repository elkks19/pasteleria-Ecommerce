<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        // $roles = auth()->user()->roles;
        //
        // if (in_array('superadmin', $roles))
        //     return true;

        // return false;
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
            'nombre' => 'required|string|min:3|max:255',
            'nit' => 'required|string|unique:clientes,nit|min:7|max:15'
        ];
    }
}
