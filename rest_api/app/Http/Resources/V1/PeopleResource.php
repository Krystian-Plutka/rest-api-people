<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PeopleResource extends JsonResource
{
    
    public function authorize()
    {
          return true;   
    }
    
     
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'country' => $this->country,
            'city' => $this->city,
            'username' => $this->username,
            'date' => $this->date,
            'telephone' => $this->telephone

        ];
        
        
    }
}
