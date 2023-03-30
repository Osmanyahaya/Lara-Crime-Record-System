<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseStoreRequest extends FormRequest
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
     * @return array
     */


     
            
    public function rules()
    {
        return [
            'category_id' => ['required','integer'],
            'complainant_gender' =>['required', 'string'],
            'complainant_age' => ['required', 'integer'],
            'complainant_name' => ['required', 'string', 'max:255'],
            'complainant_tel' => ['required', 'string', 'max:15'],
            'complainant_occupation' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:100'],
            'district' => ['required', 'string', 'max:100'],
            'location' => ['required', 'string', 'max:100'],
            'diary_of_action' => ['required', 'string'],
            'address' => ['required', 'string'],
        ];
    }
}
