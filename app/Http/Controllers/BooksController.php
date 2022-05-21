<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\BooksResource;
use App\Models\Books;

class BooksController extends Controller
{
    public function index()
    {
      return BooksResource::collection(Books::all());
    }

    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $books = Books::create($input);

        return new BooksResource($books);
    }

    public function show($id)
    {
       //
    }

    public function edit($id)
    {
       //
    }

    public function update(Request $request, $id)
    {
        $books = Books::find($id);

        $books->update($request->all());
 
        return new BooksResource($books);
    }

    public function destroy($id)
    {
        $books = Books::find($id);

        $books->delete();
        
        return response()->json(null);
    }
}
