<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'delivery_method_id' => "required|numeric",
            "payment_type_id" => "require|",
            "products" => "required"
        ];
    }
}
