<?php

namespace App\Http\Requests\Exam;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamRequest extends FormRequest
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
            'course_id'=> 'required|exists:courses,id',
            'teacher_id'=> 'required|exists:teachers,id',
            'title'=> 'required|string',
            'Max_Score'=>'required|numeric',
            'Max_Questions'=>'required|numeric',
        ];
    }
}
