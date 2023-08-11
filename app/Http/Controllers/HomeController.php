<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countires;
use App\Models\AddScholarship;
use App\Models\AddDegree;
use App\Models\Blogs;
use DB;



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
        $latestScholarships = AddScholarship::orderBy('created_at', 'desc')->paginate(6);
        $statusValues = ['scholarships-in-canada', 'scholarships-in-united-states', 'scholarships-in-australia','scholarships-in-china','scholarships-in-finland']; // Array of status values
        $polpularScholarships = AddScholarship::whereIn('scholarship_country', $statusValues)->orderBy('created_at', 'desc')->paginate(6);

        return view('index',['latestScholarships'=>$latestScholarships,'polpularScholarships'=>$polpularScholarships]);
    }

    public function scholarshipByCountry()
    {

        try {
            $countires = DB::table('countries')
                ->join('add_scholarships', 'countries.slug', '=', 'add_scholarships.scholarship_country')
                // ->where('add_scholarships.scholarship_country', '>', 0)
                ->select('countries.*')
                ->distinct()
                ->get();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        // $countires=Countires::get();
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


                        if($degreeSlug=='internships')
                        {

                           $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);
                           return view('show-blogs',['AddScholarship'=>$AddScholarship,'slug'=>$degreeSlug]);
                             
                        }else{
              
                          abort(404);
                
                        } 

                       
                    }
                }

        }

        return view('scholarship-show-by-country',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'banner_img'=>$banner_img]);
    
    }

    public function search(REQUEST $request)
    {


        $slug = $request->input('keyword');
        $banner_img="CN";
        $AddScholarship = AddScholarship::where('scholarship_name', 'LIKE', "%$slug%")->paginate(9);
        return view('scholarship-show-by-country',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'banner_img'=>$banner_img]);
    
    }

    public function showBlogHome(REQUEST $request)
    {


        $degreeSlug = $request->slug;
        
        if ($degreeSlug=='application-resources' || $degreeSlug=='scholarships-and-study' || $degreeSlug=='employment-and-profession') {
              
                $slug=$degreeSlug;
                $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);

        } else {
        
            abort(404);
        
        }

        return view('show-blogs',['AddScholarship'=>$AddScholarship,'slug'=>$slug]);
    
    }
    

    public function ShowScholarDetails(REQUEST $request)
    {
        
        $slug = $request->slug;
        $AddScholarship = AddScholarship::where('scholarship_slug', $slug)->first();


        if ($AddScholarship) {
            $banner_img = $AddScholarship->scholarship_banner_img;
            return view('scholarship-details-show',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'banner_img'=>$banner_img]);
               
        } else {
 
            $blogs = Blogs::where('blog_slug', $slug)->first();

          if($blogs)
          {
                return view('blog-details-show',['AddScholarship'=>$blogs,'slug'=>$slug]);

          }else{

            abort(404);
  
          } 
          
        }

    }
}
