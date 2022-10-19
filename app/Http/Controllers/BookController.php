<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Repositories\Book\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Create a new BookController instance.
     *
     * @return void
     */
    public function __construct(public BookRepository $repository)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookResource::collection($this->repository->with('author')->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BookStoreRequest $request
     * @return \App\Http\Resources\BookResource
     */
    public function store(BookStoreRequest $request)
    {
        return BookResource::make($this->repository->create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Book $book
     * @return \App\Http\Resources\BookResource
     */
    public function show(Book $book)
    {
        return new BookResource($book->load('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\BookUpdateRequest $request
     * @param  App\Models\Book $book
     * @return \App\Http\Resources\BookResource
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        return BookResource::make($this->repository->with('author')->update($request->validated(), $book->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Book $book
     * @return
     */
    public function destroy(Book $book)
    {
        $this->repository->delete($book->id);
    }
}
