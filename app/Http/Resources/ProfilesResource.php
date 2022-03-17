<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfilesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->user_id,
            'fname' => $this->fname,
            'lname' => $this->lname,
            'dob' => $this->dob,
            'address' => $this->address,
            'number' => $this->number,
            'sex' => $this->sex,
        ];
    }
}
