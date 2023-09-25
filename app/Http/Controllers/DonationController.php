<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;




use App\Models\Donation_form;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;



class DonationController extends Controller
{
    public function inDonation()
    {
        $donation = Donation::all();
        $totals = Donation_form::select('donation_id', DB::raw('SUM(price) as total_price'))
        ->groupBy('donation_id')
        ->get();
        $userId = Auth::id();
        $user = User::find($userId);
        return view('Donation.donation',compact('donation','totals','user'));
    }


    public function formDonation($id)
    {
        $donation = Donation::find($id);

        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);
            return view('Donation.donationform', compact('user', 'donation'));
        }
        return redirect()->route('login');

    }



    public function index()
    {

        $data=Donation::all();
        return view('dashboardbage.Donations')->with('data', $data);
    }



    public function create()
    {
        return view('dashboardbage.creatdonation');
    }


    public function store(StoreDonationRequest $request)
    {

        $request->validate([
            'DonationName' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'amount_needed'=>'required',
            ]

        );

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        Donation::create([
            'DonationName' => $request->DonationName,
            'description' => $request->description,
            'image' => $filename,
            'amount_needed'=>$request->amount_needed,

        ]);

        return redirect('donatione')->with('flash_message', 'Category Added!');
    }


    public function edit($id)
    {
        $data= Donation::find($id);
        return view('dashboardbage.editdonation')->with('data',$data);
    }


    public function update(UpdateDonationRequest $request, $id)
    {

        $data = Donation::find($id);


        if ($request->hasFile('image')) {

            if (file_exists(public_path($data->image))) {
                unlink(public_path($data->image));
            }


            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);


            $data->update(['image' => $filename]);
        }


        $data->update([
            'DonationName' => $request->DonationName,
            'description' => $request->description,
            'amount_needed'=>$request->amount_needed,

        ]);

        return redirect('donatione')->with('flash_message', 'Donation Update!');
    }





    public function destroy($id)
    {

        Donation::destroy($id);
    return redirect('donatione')->with('flash_message','donated servives deleted!');

    }





}
