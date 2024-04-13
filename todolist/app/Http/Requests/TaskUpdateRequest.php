<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateRequest extends FormRequest
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
            "task_name" => 'required|min:3',
            "task_explanation" => "required|min:6",
            "task_type" => 'required|min:3',
            "task_start_date" => 'required|date',
            "task_end_date" => 'required|date',
        ];
    }
}
