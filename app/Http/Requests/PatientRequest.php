<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cpf' => ['required', 'string', 'min:11', 'max:11'],
            'cns' => ['required', 'string', 'min:15', 'max:15'],
            'name' => ['required', 'string', 'between:3,255'],
            'birth' => ['required', 'date'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'min:11', 'max:11'],
            'county_id' => ['required', 'numeric', 'between:1,141']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'birth' => 'data de nascimento',
            'email' => 'e-mail',
            'phone' => 'telefone',
            'county_id' => 'cidade'
        ];
    }
}
