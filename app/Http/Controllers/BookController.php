<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $books=Book::all();

        return view('admin/books',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        return view('admin.addBook');
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
        $validated = $request->validate([
            'name' => 'required',
            'author' => 'required',
            'image' => 'required|image',
            "file" => "required|mimes:pdf|max:10000"
        ]);
        
        $image=$request->file('image')->store('public/bookImages');
        $pdf=$request->file('file')->store('public/bookPdf');
        $book=new Book;
        $book->name=$request->name;
        $book->author=$request->author;
        $book->descr='';
        $book->pdf_link=$pdf;
        $book->image=$image;
        $book->save();

        // dd( Storage::url($image));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $book=Book::find($id);
        return view('admin.showBook',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::find($id);
        return view('admin.editBook',['book'=>$book]);

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
        $book=Book::find($id);
        if($book){
            $book->name=$request->name;
            $book->author=$request->author;
            $book->descr=$request->descr;
            if($request->file){
                Storage::delete($book->pdf_link);
                $pdf=$request->file('file')->store('public/bookPdf');
                $book->pdf_link=$pdf;

            }
            if($request->image){
                Storage::delete($book->image);
                $image=$request->file('image')->store('public/bookImages');
       
                $book->image=$image;

            }
            $book->save();
            return redirect('/admin')->with('messageAction',"$book->name updated successfully");
        }

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
 
        Book::destroy($id);
        return redirect('/admin')->with('messageAction',"you deleted data");
    }
}
