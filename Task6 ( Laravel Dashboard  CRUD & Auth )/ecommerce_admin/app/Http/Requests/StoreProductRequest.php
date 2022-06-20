<?php

namespace App\Http\Requests;

use App\Http\Controllers\Dashboard\ProductsController;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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

            'name_ar' => ['required', 'string', 'max:32'],
            'name_en' => ['required', 'string', 'max:32'],
            'price' => ['required', 'numeric', 'between:1,999999.99'],
            'status' =>  ['nullable', 'in:' . implode(',', array_keys(ProductsController::STATUS))],
            'quantity' =>  ['nullable', 'integer', 'between:1,99'],
            'desc_ar' =>  ['required', 'string'],
            'desc_en' =>  ['required', 'string'],
            'code' =>  ['required', 'unique:products', 'max:20'],
            'brand_id' =>  ['nullable', 'integer', 'exists:brands,id'],
            'sub_category_id' =>  ['required', 'integer', 'exists:sub_categories,id'],
            'image' =>  ['required',  'mimes:' . implode(',', ProductsController::AVAIL_EX),  'max:' . (ProductsController::MAX_UPLOAD_SIZE)]
        
        ];
    }
}
