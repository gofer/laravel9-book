<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tweet' => 'required|max:140',
            'images' => 'array|max:4',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    /**
     * Retrieve the user ID in the request.
     * 
     * @return int
     */
    public function userId(): int
    {
        return $this->user()->id;
    }

    /**
     * Retrieve the tweet in the request.
     * 
     * @return string
     */
    public function tweet(): string
    {
        return $this->input('tweet');
    }

    /**
     * Retrieve the images in the request.
     * 
     * @return array
     */
    public function images(): array
    {
        return $this->file('images', []);
    }
}
