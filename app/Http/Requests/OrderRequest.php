<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_mobile' => 'required',
            'reference' => 'required',
            'product_description' => 'required',
            'currency' => 'required',
            'total' => 'required',
        ];
    }
}
