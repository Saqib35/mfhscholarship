<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countires;
use App\Models\AddScholarship;
use App\Models\AddDegree;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function scholarshipByCountry()
    {

        $countires=Countires::get();
        return view('scholarship-by-country',['countires'=>$countires]);
    }

    public function showscholarshipCountry(REQUEST $request)
    {


        $degreeSlug = $request->slug;
        $degree = AddDegree::where('degree_slug', $degreeSlug)->first();

        if ($degree) {
                $banner_img=$degreeSlug;
                $slug=$degreeSlug;
                $AddScholarship=AddScholarship::where('scholarship_degree','=',$degreeSlug)->paginate(9);

        } else {

                if($request->slug=='scholarship-lists')
                {
                    $banner_img="all-country";
                    $slug="Scholarship Lists";
                    $AddScholarship=AddScholarship::paginate(9);
                 }
                 else{
                    $countires = Countires::where('slug', $degreeSlug)->first();
                    if ($countires) {
                       $banner_img=$countires->country_code;
                       $slug=$request->slug;
                       $AddScholarship=AddScholarship::where('scholarship_country','=',$degreeSlug)->paginate(9);
                    }else{
                        abort(404);
                    }
                }

        }

        return view('scholarship-show-by-country',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'banner_img'=>$banner_img]);
    
    }

    public function ShowScholarDetails(REQUEST $request)
    {
        
        $slug = $request->slug;
        $AddScholarship = AddScholarship::where('scholarship_slug', $slug)->first();


        if ($AddScholarship) {

           return view('scholarship-details-show',['AddScholarship'=>$AddScholarship,'slug'=>$slug]);
  
               
        } else {
          
            abort(404);
  
        }

    }
}
