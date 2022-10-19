<?php

namespace App\Repositories\Book;

use App\Jobs\DeleteBook;
use App\Models\Book;
use App\Repositories\Book\BookRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class BookRepositoryEloquent extends BaseRepository implements BookRepository
{
    /**
     * @inheritDoc
     */
    public function model()
    {
        return Book::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        //
    }

    public function delete($id)
    {
        dispatch(new DeleteBook($id))->onQueue('delete-book');

        return true;
    }
}
