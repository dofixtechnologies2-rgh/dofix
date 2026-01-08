<?php

namespace Modules\Notification\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendNotificationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_ids' => 'required|array',
            'message'  => 'required|string',
            'data'     => 'nullable|array',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
