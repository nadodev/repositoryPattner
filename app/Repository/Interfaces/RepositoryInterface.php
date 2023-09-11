<?php
namespace App\Repository\Interfaces;
interface RepositoryInterface
{
    public function all();
    public function getById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);

    public function getAllByUser($userId);
}
