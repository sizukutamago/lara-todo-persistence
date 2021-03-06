<?php
declare(strict_types=1);

namespace N1215\LaraTodo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTodoItemRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
        ];
    }
}
