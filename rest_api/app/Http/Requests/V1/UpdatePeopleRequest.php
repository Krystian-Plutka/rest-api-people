<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePeopleRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        
            $method = $this->method();

            if ($method == 'PUT') {
                return [
                    'id' => ['required'],
                    'name' => ['required'],
                    'lastname' => ['required'],
                    'country' => ['required'],
                    'city' => ['required'],
                    'username' => ['required'],
                    'date' => ['required'],
                    'telephone' => ['required'],
                ];
            } 

    }

    protected function prepareForValidation() {
        $this->merge([
            'postal_code' => $this->postalCode
        ]);

    }


}


