<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChamaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->role == 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>"required|string|min:3",
            'amount'=>"required|numeric",
            'duration'=>"required|numeric",
            'location'=>"required|string|min:3",
            'description'=>"required|string|min:3",
            
        ];
    }
}
