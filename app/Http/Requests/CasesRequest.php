<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CasesRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'ssn' => ['required', 'unique:cases,ssn'],
            'phone_no' => ['required',, 'unique:cases,phone_no'],
            'age' => ['required',],
            'address' => ['required','string'],
            'income_type' => ['required','string'],
            'benefit_type' => ['required','string'],
            'marital_status' => ['required','string'],
            'health_status' => ['required','string'],
            'monthly_income' => ['required',],
            'sons' => ['required',],
            'daughters' => ['required',],
            'gov' => ['required','string'],
            'imgs' => ['required', 'image', 'mimes:png,jpg,webp,jpeg', 'max:2048'],
        ];
    }
}
