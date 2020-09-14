<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

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
        // return redirect()->back()->with('serviceAddSuccess','serviceAddSuccess');
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
    public function edit(Service $service)
    {
        //
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

        
        if ($request->file('image')) {
            
            $image = $request->file('image');
            $name = str_replace(' ', '', $request->company_name).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/company/services');
            $image->move($destinationPath, $name);
            $request->merge(['logo'=>$name]);

        }




        $service = Service::findOrFail($id);
        $service->address = $request->address;
        $service->phone = $request->phone;
        $service->mobile = $request->mobile;
        $service->email = $request->email;
        $service->company_name = $request->company_name;
        $service->about_company = $request->about_company;
        $service->logo = $request->logo;

        $service->save();
        return redirect('company/services/'.$id.'/contact')->with('serviceAddSuccess','serviceAddSuccess');
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

    public function showDiscountForm($id)
    {
        
        $service = Service::findOrFail($id);

        return view('pages.companies.service_discount',['service'=>$service]);

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
        $service->save();

         return redirect('company/services/'.$id.'/discount')->with('serviceUpdated','serviceUpdated');
    }
}
