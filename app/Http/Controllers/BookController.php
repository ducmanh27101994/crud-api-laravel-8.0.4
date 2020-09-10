<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Book::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return Book::create($request->all());
    }


    public function show(Book $book)
    {
        //
        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Book $book
     * @return void
     */
    public function update(Request $request, Book $book)
    {
        //
        return $book->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book $book
     * @return void
     * @throws \Exception
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
    }
}
