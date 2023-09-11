<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestPassword;
use App\Http\Requests\UpdateBlogRequest;
use App\Repository\Eloquent\PasswordRepository;
use Illuminate\Http\Request;

class SenhaController extends Controller
{
    public function __construct(protected PasswordRepository $repository) { }

    public function index()
    {
        return $this->repository->all();
    }

    public function show($id)
    {
        return $this->repository->getById($id);
    }

    public function store(StoreRequestPassword $request)
    {
        $request->validated();
        $hash = $this->repository->hashPassword($request->password);
        return $this->repository->create([
            'titulo' => $request->titulo,
            'username' => $request->username,
            'password' => $hash,
            'type' => $request->type,
            'website' => $request->website,
            'user_id' => $request->user_id,
        ]);
    }

    public function update(UpdateBlogRequest $request, $id)
    {
        return $this->repository->update($id, $request->validated());
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }

    public function getAllByUser($userId)
    {
        return $this->repository->getAllByUser($userId);
    }
}
