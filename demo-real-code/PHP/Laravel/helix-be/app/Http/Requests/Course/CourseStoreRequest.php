<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'details'               => [
                'required',
                'array',
                'min:7'
            ],
            "details.status"        => 'required|string',
            "details.name"          => 'required|string',
            "details.department_id" => 'required|integer',
            "details.author"        => 'required|string',
            "details.thumb"         => 'required|string',
            "details.description"   => 'required|string',
            "details.likes"         => 'integer',
            "details.length_unit"   => 'required|string',
            "details.length"        => 'required|integer',
            "details.offline"       => 'required|bool',
            "details.mood_tracker"  => 'required|bool',
            "details.feedback"      => 'required|bool',
            "tags"                  => [
                'required',
                'array'
            ],
            "categories"            => [
                'required',
                'array'
            ]
        ];
    }
}
