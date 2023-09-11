<?php

namespace App\Repository\Eloquent;

use App\Repository\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{
    public function __construct(
        protected Model $model,
    ) {}

    public function all()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->getById($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        $record = $this->getById($id);
        return $record->delete();
    }

    public function getAllByUser($userId)
    {
        return $this->model->where('user_id', $userId)->get();
    }

    public function hashPassword(string $password): string
    {
      return $this->model->password = bcrypt($password);
    }
}
