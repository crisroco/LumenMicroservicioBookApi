<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return books list
     * @return Illuminate\Http\Response
     */
    public function index(){
        
        $books = Book::all();
        return $this->successResponse($books);
    }

    /**
     * Return an instance of Book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        $rules =  [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1',
        ];

        $this->validate($request, $rules);

        $book = Book::create($request->all());

        return $this->successResponse($book, Response::HTTP_CREATED);

    }

    /**
     * Return an specific Book
     * @return Illuminate\Http\Response
     */
    public function show($book){
        // $book = Author::findOrFail($book);
        // return $this->successResponse($book);
    }

    /**
     * Update the information of an existing Book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book){
        
        //return $this->successResponse($book);


    }

    /**
     * Destroy an existing Book
     * @return Illuminate\Http\Response
     */
    public function destroy($book){        

        //return $this->successResponse($book);

    }
}
