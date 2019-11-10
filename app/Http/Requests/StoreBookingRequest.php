<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
           'start_date'=>'required|date',
           'end_date'  => 'required|date',
           'apartments_id'  => 'integer|exists:apartments,id',
           'user_id'   => 'integer|exists:users,id'
        ];
    }
}
