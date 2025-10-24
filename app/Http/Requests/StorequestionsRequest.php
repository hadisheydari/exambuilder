<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorequestionsRequest extends FormRequest
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
        return [
            'exams_id'=> 'required|exists:exams,id',
            'type'=> 'required|in:true_false, fill_blank ,descriptive',
            'questionText'=> 'required|string',
            'questionText2'=> 'required|string',
            'score'=>'required|numeric',
            'order'=>'required|numeric',
            'options'=>'nullable|array',
            'options.*.type'=>'required|in:true_false, blank_answer',
            'options.*.value'=>'nullable|string',
            'options.*.is_correct'=>'nullable|boolean',
            'keywords'=>'nullable|array',
            'keywords.*'=>'string',

        ];
    }
}
