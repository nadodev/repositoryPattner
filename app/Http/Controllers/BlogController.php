<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Repository\Interfaces\BlogRepositoryInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(protected BlogRepositoryInterface $blogRepository) { }

    public function index()
    {
        return $this->blogRepository->all();
    }

    public function show($id)
    {
        return $this->blogRepository->getById($id);
    }

    public function store(Request $request)
    {
        return $this->blogRepository->create($request->all());
    }

    public function update(UpdateBlogRequest $request, $id)
    {
        return $this->blogRepository->update($id, $request->validated());
    }

    public function destroy($id)
    {
        return $this->blogRepository->delete($id);
    }

    public function getAllByUser($userId)
    {
        return $this->blogRepository->getAllByUser($userId);
    }
}
