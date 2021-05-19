<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'transaction_status' => 'required|string|in:IN_CART,PENDING,SUCCESS,FAILED,CANCEL'
        ];
    }

    public function message()
    {
        return [
            'transaction_status.required' => 'Transaction Status tidak boleh kosong',
        ];
    }
}
