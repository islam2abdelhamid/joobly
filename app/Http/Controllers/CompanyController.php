<?php

namespace App\Http\Controllers;

use App\Company;
use App\Service;
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
        return view('pages.companies.home',['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('pages.companies.register');
    }


      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
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
            'category' => 'required|max:255',
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
    public function show(Company $company)
    {
        //
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
    public function destroy(Company $company)
    {
        //
    }

     protected function guard()
    {
        return \Auth::guard('company');
    }

    public function getCompaniesByCategory($slug){
        $companies = \DB::table('companies')->where('category', $slug)->get();
        return view('pages.companies.companies', ['companies' => $companies]);
    }

    public function companyServices($id)
    {
        $company = Company::findOrFail($id);

        return view('pages.companies.services', ['services' => $company->services()->get()]);

    }
}
