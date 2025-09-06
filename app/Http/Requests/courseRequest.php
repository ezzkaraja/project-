<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class courseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $imageRule ='nullable|image|mimes:png,jpg,jpeg,gif,svg';
        if($this->method()=='Post')
              $imageRule ='required|image|mimes:png,jpg,jpeg,gif,svg';
        return [
          'title'=>'required|max:200',
          'image'=> $imageRule,
          'price'=>'required|numeric',
          'category'=>'required',
          'description'=>'required'          ];
    }
}
