<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('catalog')->with(['books' => $books]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'ISBN' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'published_date' => 'required',
            'quantity' => 'required',
            'summary' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }

        $book = new Book;
        $book->ISBN = $request->input('ISBN');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->publisher = $request->input('publisher');
        $book->published_date = $request->input('published_date');
        $book->total_quantity = $request->input('quantity');
        $book->summary = $request->input('summary');

        if($request->hasFile('book_img')) {
            $file = $request->file('book_img');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->input('title') . '.' . $extension;
            $path = public_path('/images/books/');
            $request->file('book_img')->move($path, $filename);
            $book->book_img = $filename;
        }
        $book->save();

        return back()->with('success', 'Successfully added book to catalog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return view('view_book')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        return view('admin.edit_book')->with('book', $book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [ 
            'ISBN' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'published_date' => 'required',
            'quantity' => 'required',
            'summary' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }

        $book = Book::find($id);
        $book->ISBN = $request->input('ISBN');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->publisher = $request->input('publisher');
        $book->published_date = $request->input('published_date');
        $book->total_quantity = $request->input('quantity');
        $book->summary = $request->input('summary');

        if($request->hasFile('book_img')) {
            $file = $request->file('book_img');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->input('title') . '.' . $extension;
            $path = public_path('/images/books/');
            $request->file('book_img')->move($path, $filename);
            $book->book_img = $filename;
        }
        $book->save();

        return redirect('/admin/catalog/edit/'.$book->id)->with('success', 'Successfully added book to catalog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function searchTitle(Request $request)
    {
        $title = $request->query('searchTerm');

        $books = Book::where('title', 'like', $title . '%')->limit(10)->get();

        return $books;
    }

    public function searchAuthor(Request $request)
    {
        $author = $request->query('searchTerm');

        $books = Book::where('author', 'like', $author . '%')->limit(10)->get();

        return $books;
    }

    public function searchISBN(Request $request)
    {
        $ISBN = $request->query('searchTerm');

        $books = Book::where('ISBN', 'like', $ISBN . '%')->limit(10)->get();

        return $books;
    }
}
