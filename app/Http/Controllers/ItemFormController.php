<?php

namespace App\Http\Controllers;

use App\Models\Item_form;
use App\Http\Requests\StoreItem_formRequest;
use App\Http\Requests\UpdateItem_formRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class ItemFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data= Item_form::all();
        return view('dashboardbage.DonatedItemsForm')->with('data', $data);
    }

    public function destroy($id)
    {

        Item_form::find($id)->delete();
        Item_form::destroy($id);
    return redirect('donationitemform')->with('flash_message','donationitemform deleted!');
    }


    public function stoItem(Request $request)
    { 
        $validatedData = $request->validate([
            'volunteerName' => 'required',
            'volunteerEmail' => ['required','email', 'ends_with:.com'],
            'volunteerPhone' => ['required', 'regex:/^07[789]\d{7}$/'],
            'volunteerAddress' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => ['required','max:2048'],
        ],['volunteerPhone.regex' => 'The phone  must start with 07 and to be 10number.'
        ,'image.regex' => 'The image  extention must  be jpg or jpeg or png or gif .'
            ]
        );

    if (Auth::check()) {
        $userId = Auth::id();
    }
$filename='';
    if ($request->hasFile('image')) {
        $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/assets/img/'), $filename);
    }
     Item_form::create([
        'user_id' =>$userId,
        'item_id'=>$request->item_id,
        'volunteerName' => $request->volunteerName,
        'volunteerEmail' => $request->volunteerEmail,
        'volunteerPhone' => $request->volunteerPhone,
        'volunteerAddress' => $request->volunteerAddress,
        'description' => $request->description,
        'status' => $request->status,
        'image' => $filename,

    ]);

    return redirect()->route('paysuccess')->with([
        'success' => 'Donation successfully
    '
    ]);
    }

}
