<?php

namespace App\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'exam_id' => 'required|exists:exams,id',
            'type' => 'required|in:true_false,fill_blank,descriptive',
            'questionText' => 'required|string',
            'questionText2' => 'nullable|string',
            'score' => 'required|numeric|min:0.25',
            'order' => 'required|numeric|min:1',

            'options' => 'nullable|array',
            'options.*.type' => 'required|in:true_false,blank_answer',
            'options.*.value' => 'nullable|string',
            'options.*.is_correct' => 'nullable|boolean',

            'keywords' => 'nullable|array',
            'keywords.*' => 'string',
        ];
    }
}
