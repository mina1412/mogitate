<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UPdateProductRequest extends FormRequest
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
            'name' =>  'required|string|max:255',
            'price' => 'required|integer|between:0.100',
            'season' => 'required|array',
            'description' => 'required|string|max:120',
            'image' => 'nullable|mimes:png,jpeg'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '商品名を入力してください',
            'price.required' => '値段を入力してください',
            'price.between' => '0~1000円以内で入力してください',
            'season.required' => '季節を選択してください',
            'description.required' => '商品説明を入力してください',
            'description.max' => '120字以内で入力してください',
            'imag.mimes' => '「.png」または「.jpeg」形式でアップロードしてください',
        ];
    }
}

