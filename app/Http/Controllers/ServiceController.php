<?php

namespace App\Http\Controllers;

use App\Service;
use App\Order;
use App\Discount;
use App\Mail\BookMail;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        \Auth::user()->services()->delete();
        
        foreach ($request->services as $service) {
            $explodedService = explode("-",$service);
            $newService = new Service();
            $newService->type = $explodedService[0];
            $newService->name = $explodedService[1];
            \Auth::user()->services()->save($newService);
        }

        return redirect('/company/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service =  Service::findOrFail($id);
        return view('pages.companies.service',['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('pages.companies.service_edit',['service'=>$service]);
    }

    public function editTeam($id)
    {
        $service = Service::findOrFail($id);
        return view('pages.companies.service_team',['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $service = Service::findOrFail($id);
        
        if ($request->file('logo')) {
            
            $image = $request->file('logo');
            $name = str_replace(' ', '', $request->company_name).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/company/services');
            $image->move($destinationPath, $name);
            $service->logo = $name;
        }

        if ($request->file('image')) {
            
            $image = $request->file('image');
            $name = str_replace(' ', '', $request->company_name).'-profile.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/company/services');
            $image->move($destinationPath, $name);
            $service->image = $name;

        }

        $service->address = $request->address;
        $service->phone = $request->phone;
        $service->mobile = $request->mobile;
        $service->email = $request->email;
        $service->description = $request->description;
        $service->company_name = $request->company_name;
        $service->about_company = $request->about_company;

        $service->save();
        return redirect('company/services/'.$id.'/team')->with('serviceAddSuccess','serviceAddSuccess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    public function showContactForm($id)
    {
        
        $service = Service::findOrFail($id);

        return view('pages.companies.service_contact',['service'=>$service]);

    }

   

    public function updateContact($id, Request $request)
    {
        $service = Service::findOrFail($id);
        $service->contact_company_name = $request->contact_company_name;
        $service->contact_phone = $request->contact_phone;
        $service->contact_mobile = $request->contact_mobile;
        $service->contact_email = $request->contact_email;
        $service->contact_address = $request->contact_address;
        $service->contact_social = $request->contact_social;
        $service->isActive = true;
        $service->save();

         return redirect('company/services/'.$id)->with('serviceUpdated','serviceUpdated');
    }

    public function updateTeam($id, Request $request) {

        $service = Service::findOrFail($id);
    
        $service->description = $request->description;
        $service->save();
        
        if($request->hasfile('images'))
         {
            $service->members()->delete();
            foreach($request->file('images') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/images/company/services/teams', $name);
                $team = new Team();
                $team->image = $name;
                $service->members()->save($team);
            }

         }
        return redirect('company/services/'.$id.'/contact')->with('serviceAddSuccess','serviceAddSuccess');

    }

    public function book(Request $request){
        $order = new Order();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->mobile = $request->mobile;
        $order->email = $request->email;
        $order->description = $request->description;
        $order->date = $request->date;
        $service = Service::findOrFail($request->service);
        $order->service_id = $request->service;

        $company = $service->company()->first();

        $company->orders()->save($order);
        return redirect()->back()->with('orderSuccess','orderSuccess');
    }
}
