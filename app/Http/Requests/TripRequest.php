<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripRequest extends FormRequest
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
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'title' => 'required|string|max:30',
            'destination' => 'nullable|string|max:20',
        ];
    }

    public function attributes()
    {
        return [
            'start_date' => '出発日',
            'end_date' => '帰宅日',
            'title' => '旅のしおりのタイトル',
            'destination' => '旅行先',
        ];
    }
}
