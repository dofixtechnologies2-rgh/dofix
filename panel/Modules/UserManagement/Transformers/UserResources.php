<?php

namespace Modules\UserManagement\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Notifications\Notifiable;

class UserResources extends JsonResource
{
    use Notifiable;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
