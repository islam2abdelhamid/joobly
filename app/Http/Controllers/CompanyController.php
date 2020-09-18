<?php

namespace App\Http\Controllers;

use App\Company;
use App\Service;
use App\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $userServices = \Auth::user()->services()->get('name');
        $userServicesNames = [];
        foreach ($userServices as $key) {
            array_push($userServicesNames, $key->name);
        }
        return view('pages.companies.home',['services' => $services,'userServices'=>$userServicesNames]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
         if (\Auth::guard('company')->user()) {
            return redirect('/company/home');
        }
        return view('pages.companies.register');
    }


    public function getService($id ,$serviceId)
    {
        
        $services = Company::findOrFail($id)->services()->where('isActive',true)->get();
        $service = Service::findOrFail($serviceId);
        return view('pages.users.service', ['service' => $service, 'services'=>$services]);

    }




      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {    if (\Auth::guard('company')->user()) {
            return redirect('/company/home');
        }
        return view('pages.companies.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
         $validatedData = $request->validate([
            'managerName' => 'required|max:255',
            'companyName' => 'required|max:255',
            'mobile' => 'required|max:255',
            'description' => 'required',
            'landTel' => 'required|max:255',
            'email' => 'required|unique:companies,email',
            'country' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $validatedData['password'] = Hash::make($request['password']);
        
        Company::create($validatedData);



        $credentials = array('email' => $request['email'], 'password' => $request['password']);


         if (Auth::guard('company')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {

        $details = Auth::guard('company')->user();
  

         return redirect('company/home');
        }

        else {
            return redirect()->back();
        }
    
    }

    public function companyLogin(Request $request)
    { 
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = array('email' => $request['email'], 'password' => $request['password']);

        if (Auth::guard('company')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {

        $details = Auth::guard('company')->user();
         return redirect('company/home');
        }

      
        else {
            return redirect()->back()->withErrors('invalid email or password');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Service::findOrFail($id)->company()->first();
        $services = $company->services()->where('isActive',true)->get();

        return view('pages.users.company', ['company' => $company, 'services'=>$services]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
            if ($request->file('image')) {
                
                $image = $request->file('image');
                $name = str_replace(' ', '', $request->companyName).'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/company');
                $image->move($destinationPath, $name);
                $request->merge(['logo'=>$name]);

            }

            // return request()->only('address', 'landTel', 'mobile', 'email', 'companyName','description','logo','category');

        $company->update(request()->only('address', 'landTel', 'mobile', 'email', 'companyName','description','logo', 'category'));


        return redirect()->back()->with('companyUpdated','companyUpdated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function updateCompany(Request $request)
    {

        $company = \Auth::user();


        
        if ($request->file('image')) {
            
            $image = $request->file('image');
            $name = str_replace(' ', '', $request->companyName).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/company');
            $image->move($destinationPath, $name);
            $company->image = $name;
        }


         if ($request->file('logo')) {
            
            $image = $request->file('logo');
            $name = str_replace(' ', '', $request->companyName).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/company');
            $image->move($destinationPath, $name);
            $company->logo = $name;
        }


        $company->companyName = $request->companyName;
        $company->description = $request->description;
        $company->managerName = $request->managerName;
        $company->landTel = $request->landTel;
        $company->mobile = $request->mobile;
        $company->mobile = $request->mobile;
        $company->email = $request->email;
        $company->country = $request->country;
        $company->city = $request->city;
        $company->address = $request->address;
        $company->password = Hash::make($request['password']);

        $company->save();
        
        return redirect('/company')->with('profileUpdated','profileUpdated');

        
    }

     protected function guard()
    {
        return \Auth::guard('company');
    }

    public function getCompaniesByCategory($slug){
        $companies = \DB::table('services')->where(['name'=>$slug,'isActive'=>true])->get();
        return view('pages.users.companies', ['companies' => $companies]);
    }

    public function companyServices()
    {
        $services = \Auth::user()->services()->get();

        return view('pages.companies.services', ['services' => $services]);

    }

    public function companyOrders()
    {
        $orders = \Auth::user()->orders()->get();

        return view('pages.companies.orders', ['orders' => $orders]);

    }

     public function updateDiscount(Request $request)
    {
        $company = \Auth::user();
        $company->discount_description = $request->discount_description;
        $company->save();
        $company->discounts()->delete();

        if($request->discount1){
            $discount = new Discount();
            $discount->name = $request->discount1[0];
            $discount->color = $request->discount1[1];
            $company->discounts()->save($discount);
         
        }

        if($request->discount2){
            $discount = new Discount();
            $discount->name = $request->discount2[0];
            $discount->color = $request->discount2[1];
            $company->discounts()->save($discount);
          
        }

        if($request->discount3){
            $discount = new Discount();
            $discount->name = $request->discount3[0];
            $discount->color = $request->discount3[1];
            $company->discounts()->save($discount);
          
        }

        return redirect('/company')->with('discountAdded','discountAdded');

    }
    

    public function logout(Request $request) {
        \Auth::logout();
        return redirect('/company/login');
    }
}
