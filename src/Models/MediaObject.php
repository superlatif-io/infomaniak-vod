<?php

namespace Superlatif\InfomaniakVod\Models;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class MediaObject
{

    public string $id;
    public string $name;
    public string|null $description;
    public bool $validated;
    public bool $published;
    public float $duration;
    public int $state;
    public Carbon|null $created_at;
    public Carbon|null $updated_at;
    public Carbon|null $collected_at;
    public Carbon|null $published_at;
    public Carbon|null $discarded_at;
    public Carbon|null $deleted_at;

    public function __construct(Collection $data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->validated = $data['validated'];
        $this->published = $data['published'];
        $this->duration = $data['duration'];
        $this->state = $data['state'];
        $this->created_at = $data['created_at'] ? Carbon::parse($data['created_at']) : null;
        $this->updated_at = $data['updated_at'] ? Carbon::parse($data['updated_at']) : null;
        $this->collected_at = $data['collected_at'] ? Carbon::parse($data['collected_at']) : null;
        $this->published_at = $data['published_at'] ? Carbon::parse($data['published_at']) : null;
        $this->discarded_at = $data['discarded_at'] ? Carbon::parse($data['discarded_at']) : null;
        $this->deleted_at = $data['deleted_at'] ? Carbon::parse($data['deleted_at']) : null;
    }
}
