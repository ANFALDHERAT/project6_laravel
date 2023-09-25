<?php


namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\User;

use Illuminate\Support\Facades\Request;

use Auth;

class ServiceController extends Controller
{



  public function inService()
{
    $data= Service::all();
    $userId = Auth::id();
    $user = User::find($userId);
    return view('Service.service',['service'=>$data,'user'=>$user]);

}


    public function index()
    {

        $data=Service::all();
        return view('dashboardbage.DonatedServices')->with('data', $data);
    }


  
public function formService($id) {
    $service = Service::find($id);

    if (Auth::check()) {
        $userId = Auth::id();
        $user = User::find($userId);
        return view('service.serviceform', compact('user','service'));
    }
        return redirect()->route('login');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardbage.creatservices');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {

        $request->validate([
            'ServiceName' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',]

        );

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        Service::create([
            'ServiceName' => $request->ServiceName,
            'description' => $request->description,
            'image' => $filename,

        ]);

        return redirect('donatedservives')->with('flash_message', 'Category Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Service::find($id);
        return view('dashboardbage.editservices')->with('data',$data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */


    public function update(UpdateServiceRequest $request, $id)
    {

        $data = Service::find($id);


        if ($request->hasFile('image')) {

            if (file_exists(public_path($data->image))) {
                unlink(public_path($data->image));
            }


            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);


            $data->update(['image' => $filename]);
        }


        $data->update([
            'ServiceName' => $request->ServiceName,
            'description' => $request->description,

        ]);

        return redirect('donatedservives')->with('flash_message', 'Donation Update!');
    }








    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Service::destroy($id);
    return redirect('donatedservives')->with('flash_message','donated servives deleted!');

    }





}
