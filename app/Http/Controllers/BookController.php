<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService) {
        $this->bookService = $bookService;
    }

    public function index() {
        $books = Book::query()->with('genre')->get();
        return $books;
    }

    public function search(Request $request) {

        $data = $request->all();
        return Book::query()->with('genre')
            ->where('name', 'like', "%" . $data['search']. "%")
            ->orWhere('author', 'like', "%" . $data['search']. "%")
            ->get();
    }
}
