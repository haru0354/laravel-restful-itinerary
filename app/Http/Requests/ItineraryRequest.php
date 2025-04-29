<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItineraryRequest extends FormRequest
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
            'date_and_time' => 'required|date',
            'title' => 'required|string|max:30',
            'content' => 'nullable|string|max:200',
            'hide_content' => 'nullable|string|max:200',
        ];
    }

    public function attributes()
    {
        return [
            'date_and_time' => '旅程の日時',
            'title' => '旅程の目的',
            'content' => '旅程の詳細',
            'hide_content' => '追加情報',
        ];
    }
}
