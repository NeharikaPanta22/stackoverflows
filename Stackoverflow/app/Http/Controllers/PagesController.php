<?php

namespace App\Http\Controllers;

use App\Models\Stackoverflow;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function home(){
        $data=[
            'name'=>'Neharika Panta',
            'age'=>17
        ];
        return view('welcome')->with($data);
    }
    public function profile(){
        $data=[
            'name'=>'Neharika Panta',
            'age'=>17
        ];
        return view('profile')->with($data);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $Stackoverflow =new Stackoverflow();
        $Stackoverflow->name=$request->name;
        $Stackoverflow->address=$request->address;
        $Stackoverflow->age=$request->age;
        $Stackoverflow->dob=$request->dob;
        $img=Image::make($request->file('image'));
        $filename=$request->file('image')->getClientOriginalName();
        $img->save('storage/image/'.$filename);
        $Stackoverflow->image=$filename;

        $Stackoverflow->save();

        return redirect('/list');
    }

    public function list(){
        $stackoverflows = Stackoverflow::orderBy('name')->get();
        return view('list')->with('stackoverflows',$stackoverflows);

    }
    public function edit($id){
        $stackoverflow = Stackoverflow::where('id',$id)->first();
        return view('update')->with('student',$stackoverflow);
    }
    public function update(Request $request)
    {
        $stackoverflow = Stackoverflow::where('id', $request->id)->first();
        $stackoverflow->name = $request->name;
        $stackoverflow->address = $request->address;
        $stackoverflow->age = $request->age;
        $stackoverflow->dob = $request->dob;
    }
}
