<?php

namespace App\Repositories\Book;

use Prettus\Repository\Contracts\RepositoryInterface;

interface BookRepository extends RepositoryInterface
{
    /**
     * Add queue the Delete Book job
     */
    public function delete($id);
}