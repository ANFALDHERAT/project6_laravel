<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact as Contact;
use App\Models\Test;
use App\Models\User;
use Auth;

  
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('Contact.contactus');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
 

        Contact::create([
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'message'=>$request->input('message')
        ]);

  
        $userId = Auth::id();
        $user = User::find($userId);
  
        return view('Contact.contactus' , compact('user')); 
    }
}