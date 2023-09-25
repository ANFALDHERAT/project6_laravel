<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\User;

use Illuminate\Support\Facades\Auth;



class ItemController extends Controller
{

    public function index()
    {

        $data=Item::all();
        return view('dashboardbage.donateditems')->with('data', $data);
    }




    public function create()
    {
        return view('dashboardbage.creatiteam');
    }


    public function store(StoreItemRequest $request)
    {

        $request->validate([
            'ItemName' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',]

        );

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        Item::create([
            'ItemName' => $request->ItemName,
            'description' => $request->description,
            'image' => $filename,

        ]);

        return redirect('donateditems')->with('flash_message', 'Category Added!');
    }


    public function edit($id)
    {
        $data= Item::find($id);
        return view('dashboardbage.editdonationitem')->with('data',$data);
    }


    public function update(UpdateItemRequest $request, $id)
    {

        $data = Item::find($id);


        if ($request->hasFile('image')) {

            if (file_exists(public_path($data->image))) {
                unlink(public_path($data->image));
            }


            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);


            $data->update(['image' => $filename]);
        }


        $data->update([
            'ItemName' => $request->ItemName,
            'description' => $request->description,

        ]);

        return redirect('donateditems')->with('flash_message', 'Donation Update!');
    }





    public function destroy($id)
    {

        Item::destroy($id);
    return redirect('donateditems')->with('flash_message','donated servives deleted!');

    }


    public function inItem()
    {
        $data= Item::all();
        $userId = Auth::id();
        $user = User::find($userId);
        return view('Item.item',['item'=>$data,'user'=>$user]);
    }


    public function formItem($id)
    {
        $itemid = Item::find($id);

        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);
            return view('Item.itemform', compact('user', 'itemid'));
        }
        return redirect()->route('login');

    }




}
