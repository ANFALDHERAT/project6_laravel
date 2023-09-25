<?php

namespace App\Http\Controllers;

use App\Models\Donation_form;
use App\Http\Requests\StoreDonation_formRequest;
use App\Http\Requests\UpdateDonation_formRequest;
use App\Models\Donation;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class DonationFormController extends Controller
{
    public function index()
    {


        $data = Donation_form::all();
        return view('dashboardbage.DonationForm')->with('data', $data);
    }

    public function destroy($id)
    {
        Donation_form::find($id)->delete();
        Donation_form::destroy($id);
        return redirect('donationform')->with('flash_message', 'donationform deleted!');

    }

    public function stoDonation(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => ['required', 'email', 'ends_with:.com'],
                'phone' => ['required', 'regex:/^07[789]\d{7}$/'],
                'price' => 'required|numeric',
                'donation_id' => 'required|numeric',

            ],
            [
                'phone.regex' => 'The phone  must start with 07 and to be 10 number.'
            ]
        );



        Donation_form::create([
            'price' => $request->input('price'),
            'user_id' => Auth::id(),
            'donation_id' => $request->input('donation_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'showdonation' => $request->input('showdonation'),
        ]);
        $donationId = $request->input('donation_id'); 
        
        $totalAmountDonated = Donation_form::where('donation_id', $donationId)->sum('price');
       $donation = Donation::find($donationId);

        if ($donation) {
            $donation->update(['amount_donated' => $totalAmountDonated]);
            $donation->save();
        }
        return redirect()->route('payment', ['price' => $request->input('price')]);
    }
    public function showdonation()
    {
        $DonationForms = Donation_form::where('showdonation', 'yes')->get();

        $userIds = $DonationForms->pluck('user_id')->unique()->toArray();
        $donationIds = $DonationForms->pluck('donation_id')->unique()->toArray();
    
        $users = User::whereIn('id', $userIds)->get();
        $donations = Donation::whereIn('id', $donationIds)->get();

        return view('userDonation', compact('DonationForms', 'users', 'donations'));
     
    }
}