<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countires;
use App\Models\AddScholarship;
use App\Models\AddDegree;
use App\Models\Blogs;
use DB;
use Illuminate\Support\Facades\Response;






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

    public function ShowFeed()
    {
          
         
         $posts =AddScholarship::orderBy('created_at', 'desc')->take(10)->get();
        
         return response()->view('rss', [
             'posts' => $posts
         ])->header('Content-Type', 'text/xml');


    }
    




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
                $title = $degree->meta_title;
                $description = $degree->meta_description;
                $keywords = $degree->meta_keywords; 
                $short = $degree->short_description; 
                $h2=$degree->h2;
                // $degreeSlugs = 'undergraduate-scholarships';
                $AddScholarship = AddScholarship::whereJsonContains('scholarship_degree', $slug)->paginate(9);

        } else {

                if($request->slug=='scholarship-lists')
                {
                    $banner_img="all-country";
                    $slug="Scholarship Lists";
                    $title="Government Scholarship Application Guide | MFH Scholarship";
                    $description="Unlock opportunities for scholarships and funding with our expert guidance on government scholarship application. Choose MFH Scholarship for financial aid.";
                    $keywords="scholarships, education scholarships, academic grants, financial aid, scholarship opportunities, educational funding";
                    $short = 'Scholarships are financial awards given to students to support their education. They are typically based on various criteria such as academic achievement, financial need, extracurricular involvement, community service, specific talents, or personal characteristics. Scholarships can come from a variety of sources including universities, colleges, private organizations, foundations, government agencies, and corporations.Simplify your scholarship journey with MFH Scholarships curated lists, featuring government scholarship applications. Access a diverse range of funding opportunities to streamline your application process. Stay informed, maximize your chances of success, and pursue your educational goals with ease. Explore our user-friendly platform for a seamless experience in scholarship applications and funding. Start your journey towards academic excellence today.'; 
                    $h2='Scholarships Program Application';
                    $AddScholarship=AddScholarship::paginate(9);
                  
                 }
                 else{
                    $countires = Countires::where('slug', $degreeSlug)->first();
                    if ($countires) {
                       $banner_img=$countires->country_code;
                       $slug=$request->slug;
                       $title=$countires->meta_title;
                       $description=$countires->meta_description;
                       $keywords=$countires->meta_keywords;
                       $short = $countires->short; 
                       $h2=$countires->h2;
                       
                       $AddScholarship=AddScholarship::where('scholarship_country','=',$degreeSlug)->paginate(9);
                   
                    }else{


                        if($degreeSlug=='internships')
                        {
                           $title="Student Internship Program | MFH Scholarship";
                           $description="Get the MFH Scholarship for a rewarding summer internship. Join our student internship program to gain valuable experience and build your future. Contact us.";
                           $keywords="internships, professional intern programs, experiential learning, internship opportunities, practical work experience, career development";
                           $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);
                           $h2='Summer Internship Program for Students';
                           $content='Embark on a transformative journey with our Student Internship Program, designed to empower and equip you with valuable skills. Dive into a rewarding experience with our Summer Internship opportunities, where learning meets real-world application. Our internships offer a dynamic environment for students to gain hands-on experience, network with industry professionals, and make meaningful contributions. Elevate your resume, expand your knowledge, and set the stage for a successful career. Explore the diverse range of internships available at MFH Scholarship and take the first step towards a bright future. Seize the opportunity to grow and thrive in your chosen field through our internship programs.';
                           return view('show-blogs',['AddScholarship'=>$AddScholarship,'slug'=>$degreeSlug,'title'=>$title,'description'=>$description,'keywords'=>$keywords,'h2'=>$h2, 'content'=>$content]);
                             
                        }else{
              
                          abort(404);
                
                        } 

                       
                    }
                }

        }

        return view('scholarship-show-by-country',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'banner_img'=>$banner_img ,'title'=>$title,'description'=>$description,'keywords'=>$keywords,'short'=>$short,'h2'=>$h2]);
    
    }

    public function search(REQUEST $request)
    {


        $slug = $request->input('keyword');
        $banner_img="CN";
        $AddScholarship = AddScholarship::where('scholarship_name', 'LIKE', "%$slug%")->paginate(9);
        $title="Unlock Your Future with Scholarships: Funding Opportunities for Education";
        $description="Explore a world of scholarship opportunities to fund your education. Discover various scholarships, grants, and financial aids to pursue your academic dreams and shape a brighter future.";
        $keywords="scholarships, education funding, financial aid, scholarship opportunities, academic grants, educational support";
        return view('scholarship-show-by-country',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'banner_img'=>$banner_img,'title'=>$title,'description'=>$description,'keywords'=>$keywords,'short'=>'']);
    
    }

    public function showBlogHome(REQUEST $request)
    {


        $degreeSlug = $request->slug;
        
        if ($degreeSlug=='application-resources') {
            $title="Streamline Your Journey: Essential Application Resources for Success";
            $description="Access a wealth of application resources to enhance your chances of success. Our comprehensive guide provides valuable insights, tips, and tools to help you navigate the application process with confidence and achieve your goals.";
            $keywords="application resources, application tips, application guidelines, application tools, application success, application support";
            $slug=$degreeSlug;
            $h2='';
            $content='';
            $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);

        }else if($degreeSlug=='scholarships-and-study')
        {
            $title="Funding Your Education: Scholarships and Study Opportunities for a Bright Future";
            $description="Discover the perfect blend of scholarships and study programs to fuel your educational journey. Our comprehensive guide offers insights into securing financial aid and finding the right study path for your academic and career aspirations.";
            $keywords="scholarships and study, educational funding, study programs, scholarship opportunities, academic financial aid, higher education support";
            $slug=$degreeSlug;
            $h2='';
            $content='';
            $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);
        
        }else if($degreeSlug=='employment-and-profession')
        {
            $title="Unlocking Opportunities: Navigating Employment and Profession Pathways for Success";
            $description="Explore a world of possibilities in employment and profession fields. Our comprehensive guide provides insights into career growth, job opportunities, and professional development, empowering you to thrive in your chosen profession.";
            $keywords="employment and profession, career opportunities, professional growth, job pathways, career development, job prospects, professional success";
            $slug=$degreeSlug;
            $h2='';
            $content='';
            $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);
        
        }
         else {
        
            abort(404);
        
        }

        return view('show-blogs',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'title'=>$title,'description'=>$description,'keywords'=>$keywords , 'h2'=> $h2,'content'=>$content]);
    
    }

    public function showAllBlogs(REQUEST $request)
    {
      
            $title="Streamline Your Journey: Essential Application Resources for Success";
            $description="Access a wealth of application resources to enhance your chances of success. Our comprehensive guide provides valuable insights, tips, and tools to help you navigate the application process with confidence and achieve your goals.";
            $keywords="application resources, application tips, application guidelines, application tools, application success, application support";
            $slug='Our  Blogs';
            $h2='';
            $AddScholarship=Blogs::where('blog_category','=',['our-blogs'])->paginate(9);
            $content='';    
            return view('show-blogs',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'title'=>$title,'description'=>$description,'keywords'=>$keywords, 'h2'=> $h2,'content'=>$content]);
    
      
    }
    

    public function ShowScholarDetails(REQUEST $request)
    {
        
        $slug = $request->slug;
        $AddScholarship = AddScholarship::where('scholarship_slug', $slug)->first();


        if ($AddScholarship) {
            $banner_img = $AddScholarship->scholarship_banner_img;
            $title=$AddScholarship->meta_title;
            $description=$AddScholarship->meta_description;
            $keywordss=$AddScholarship->meta_keyworlds;
        
            return view('scholarship-details-show',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'banner_img'=>$banner_img,'title'=>$title,'description'=>$description,'keywords'=>$keywordss]);
               
        } else {
 
            $blogs = Blogs::where('blog_slug', $slug)->first();

          if($blogs)
          {
                $title=$blogs->meta_title;
                $description=$blogs->meta_description;
                $keywordss=$blogs->meta_keyworlds;
                
                return view('blog-details-show',['AddScholarship'=>$blogs,'slug'=>$slug,'title'=>$title,'description'=>$description,'keywords'=>$keywordss]);

          }else{

            abort(404);
  
          } 
          
        }

    }
}
