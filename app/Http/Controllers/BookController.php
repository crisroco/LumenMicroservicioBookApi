<?php

namespace App\Http\Controllers;

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
        

        //return $this->successResponse($books);
    }

    /**
     * Return an instance of Book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        
        //return $this->successResponse($book, Response::HTTP_CREATED);

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
