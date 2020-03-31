<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TaskRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * バリデーションエラー発生時Jsonで返す.
     */
    protected function failedValidation(Validator $validator)
    {
        $res = response()->json([
            'status'  => 400,
            'errors'  => $validator->errors(),
            'summary' => 'Failed validation.'
        ], 400);

        throw new HttpResponseException($res);
    }
}
