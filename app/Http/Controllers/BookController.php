<?php

namespace Sirolad\Http\Controllers;

use Sirolad\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Get all books
     *
     * @return json
     */
    public function books()
    {
        return $books = Books::all();

    }

    /**
     * Create a new Book
     *
     * @param  Request $request
     *
     * @return json
     */
    public function create(Request $request)
    {

        $book = new Books();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->sbn_code = $request->input('isbn');
        $book->year = $request->input('year');
        $book->save();

        return response('Book successfully created', 200)
                  ->header('Content-Type', 'text/plain');
    }

    /**
     * Delete a book
     *
     * @param  int $id
     *
     * @return mixed
     */
    public function remove($id)
    {
        $book = Books::find($id);
        if ($book) {

            $book->delete();

            return response('Book Successfully deleted', 200)
                      ->header('Content-Type', 'text/plain');
        }

        return abort('404', 'Book does not exist.');
    }
}
