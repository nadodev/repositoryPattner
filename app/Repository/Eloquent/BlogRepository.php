<?php

namespace App\Repository\Eloquent;

use App\Repository\Interfaces\BlogRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }
}
