<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UpdateBookingRequest extends FormRequest
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
           'start_date'=>'required',//|after:tomorrow',
           'end_date'  => 'required',
           'is_active' => 'boolean:true,false',
           'apartments_id'  => 'integer|exists:apartments,id',
           'user_id'   => 'integer|exists:users,id'
        ];
    }
}
