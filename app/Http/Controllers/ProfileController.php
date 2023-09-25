<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Donation;
use App\Models\Donation_form;
use App\Models\Item_form;
use App\Models\Service_form;
use App\Models\User;
use DB;
use PDF;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);


        return view('profile', [
            'user' => $user,
        ]);
    }
    public function pdf(){
        $id = Auth::id();
        $user = User::find($id);
        
$Donation=Donation_form::where('user_id', $id)->with('donation')->get();



            $html = view('certificate_template', compact('user','Donation'));
            $pdf = PDF::loadHTML($html);
            return $pdf->download('participation_certificate.pdf');
    }
    public function pdfService(){
        $id = Auth::id();
        $user = User::find($id);

$service = Service_form::where('user_id', $id)->with('service')->get();

            $html = view('participation_certificate_service', compact('user', 'service'));
            $pdf = PDF::loadHTML($html);
            return $pdf->download('participation_certificate_service.pdf');
    }
    public function pdfItem(){
        $id = Auth::id();
        $user = User::find($id);

        $items = Item_form::where('user_id', $id)->with('item')->get();

            $html = view('participation_certificate_item', compact('user', 'items'));
            $pdf = PDF::loadHTML($html);
            return $pdf->download('participation_certificate_item.pdf');
    }

    public function edit(Request $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        $filename = '';
        // dd($request->image);
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }
        $id = Auth::id();
        User::where(['id' => $id])->update($data);
        return redirect()->route('home')->with([
            'success' => 'updated successfully'
        ]);
    }
    public function image()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('layout.nav', ['user' => $user]);
    }
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout();
        return Redirect::to('/');
    }

}
