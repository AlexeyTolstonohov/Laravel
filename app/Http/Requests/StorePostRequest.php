<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return  $rules = [
            'title' => 'requared|min:5|max:100',
            'content' =>'requared',
            'rubric_id' => 'integer',
        ];
        /*правила валидации*/
    }

    public function messages()
    {
        return [
            'title.requared' => 'Заполните поле названия',
            'title.min' =>'Минимум 5 символов',
            'title.max' =>'Максимум 100 символов',
            'rubric_id.integer'=> 'Выберите рубрику из списка',
            /*сообщение при непрохождении валидации */
        ];
    }
}
