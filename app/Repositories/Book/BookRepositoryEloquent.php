<?php

namespace App\Repositories\Book;

use App\Jobs\DeleteBook;
use App\Models\Book;
use App\Repositories\Book\BookRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class BookRepositoryEloquent extends BaseRepository implements BookRepository, CacheableInterface
{
    use CacheableRepository;

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
