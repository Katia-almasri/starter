<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
        'offer_name_en'=>'unique:offers,offer_name_en|required|max:20', 
        'offer_name_ar'=>'unique:offers,offer_name_ar|max:20',
        'details_en'=>'required|max:100', 
        'details_ar'=>'required|max:100', 
        'price'=>'required|numeric|max:100000'
      ];
    }

    public function messages(){
        return [
        'details_en.max'=>__('messages.toooooo much details'),
        'details_en.required'=>__('messages.details is required'),

        'details_ar.max'=>__('messages.toooooo much details'),
        'details_ar.required'=>__('messages.details is required'),

        'price.numeric'=>__('messages.price should be numeric'),
        'price.required'=>__('messages.price is required'),

        'offer_name_en.required'=>__('messages.offer name is required'),
        'offer_name_en.unique'=>__('messages.this offer name had been token'),
        'offer_name_en.max'=>__('messages.too long offer name'),

        'offer_name_ar.unique'=>__('messages.this offer name had been token'),
        'offer_name_ar.max'=>__('messages.too long offer name'),
     ];
    }
}
