<?php

namespace App\Http\Resources\Api;

use App\Models\Enum\UserEnum;
use Illuminate\Http\Resources\Json\JsonResource;

class ChannelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->channel_id,
            'name'      => $this->channel_name,
            'name_uni'  => $this->channel_name_uni,
            'icon'      => config('const.IMAGE_DOMAIN').$this->channel_icon,
        ];
    }
}
