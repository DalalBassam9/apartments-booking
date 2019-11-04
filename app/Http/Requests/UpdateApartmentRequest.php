<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApartmentRequest extends FormRequest
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
           'address' =>' required|string',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
           'description' => 'required|string',
           'price' => 'required|integer|min:0',
           'numbers_bathrooms' => 'required||integer',
           'numbers_rooms' => 'required|integer',
           'furnished'    => 'boolean:true,false',
           'floor'        => 'required|integer',
           'conditioning' => 'boolean:true,false'
        ];
    }
}
