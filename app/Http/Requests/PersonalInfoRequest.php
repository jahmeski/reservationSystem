<?php

namespace App\Http\Requests;

use App\Rules\AlphaSpaces;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', new AlphaSpaces],
            'middle_name' => [new AlphaSpaces],
            'last_name' => ['required', new AlphaSpaces],
            'birth_date' => ['required', 'date_format:m/d/Y'],
            'birth_place' => ['required'],
            'civil_status' => ['required'],
            'citizenship' => ['required', new AlphaSpaces],
            'gender' => ['required'],
            'barangay' => ['required'],
            'city' => ['required'],
            'province' => ['nullable', new AlphaSpaces],
            'zip_code' => ['nullable', 'numeric'],
            'blood_type' => ['nullable', new AlphaSpaces],
            'pagibig' => ['nullable', 'numeric'],
            'philhealth' => ['nullable', 'numeric'],
            'sss' => ['nullable', 'numeric'],
            'tin' => ['nullable', 'numeric'],
            'mobile' => ['numeric', 'regex:/(09)[0-9]{9}/'],
            'telephone' => ['numeric', 'regex:/[0-9]{7}/']
        ];
    }
}
