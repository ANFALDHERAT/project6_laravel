<?php

namespace App\Http\Controllers;
use App\Models\Show;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
        $data= Show::all();
        return view('dashboardbage.show')->with('data', $data);
    }
    public function store(Request $request)
    {
         $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        $input =$request->all();
        Show::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $filename,
        ]);
       return redirect('admin')->with('flash_message','Admin Added!');
    }



    public function show($id)
    {
        $data=Show::find($id);
        return view('dashboardbage.show')->with('data',$data);
    }


    public function edit($id)
    {
        $data=Show::find($id);
        return view('dashboardbage.show')->with('data',$data);
    }

    public function update(Request $request, $id)
    {
        $data=Show::find($id);
        $input=$request->all();
        $data->update($input);
         return redirect('show')->with('flash_message','Admin Updated!');
    }
}
