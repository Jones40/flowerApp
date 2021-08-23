<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use Database\Seeders\FlowerSeeder;
use Illuminate\Support\Facades\Validator;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flowers = Flower::all();

        // To display a specific view :
        return view('flowers', ['flowers' => $flowers]);
    }
    public function ajaxForm()
    {
        return view("ajax-form");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-flower');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate automatically return back() to previous page if errors
        $flower = new Flower;
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->type = $request->type;
        $flower->save();

        // redirect to flowers list with a message
        return redirect('flowers')->with('success', $request->name . ' was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flowers = Flower::find($id); // this returns an array
        $comments = $flowers->comments;
        // dd($flowers->comments);

        //or return view('show-flower', ['flower' =>$flower[0]]);
        return view('details-flower', ['flower' => $flowers, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Grab the flower
        $flowers = Flower::find($id); // this returns an array

        // Show the form
        return view('update-flower', ['flower' => $flowers]);
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
        $flowers = Flower::find($id);
        $flowers->name = $request->name;
        $flowers->price = $request->price;

        $flowers->save();



        // redirect to flowers list with a message
        return redirect('flowers')->with('success', $request->name . ' was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Flower::destroy($id);




        // redirect to flowers list with a message
        return redirect('flowers')->with('success', 'Flower deleted');
    }
    public function ajaxAnswer(Request $request)
    {

        $validations = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'price' => 'required',
            'type' => 'required|max:50',
        ]);

        // + Upload file
        $fileName = $request->file->getClientOriginalName(); //'randomName.' . $request->file->extension();
        $public_path = public_path('uploads');

        $request->file->move($public_path, $fileName);
        $flower = new Flower;
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->type = $request->type;

        $flower->save();
        if ($validations->fails())
            return response()->json(['errors' => $validations->errors()->all()]);

        return response()->json(['success' => 'Record is added']);
    }
}
