<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => 'required|alpha|max:20',
            'first_name' => 'required|alpha|max:30',
            'email' => 'required|email',
            'telephone' => 'required|alpha_num',
            'subject' => 'required|alpha_num',
            'message' => 'required|alpha_num',
        ];
    }
}
