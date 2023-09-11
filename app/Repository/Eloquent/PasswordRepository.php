<?php

namespace App\Repository\Eloquent;

use App\Models\Senha;
use App\Repository\Interfaces\PasswordRepositoryInterface;

class PasswordRepository extends BaseRepository implements PasswordRepositoryInterface
{
    public function __construct(Senha $model)
    {
        parent::__construct($model);
    }


}
