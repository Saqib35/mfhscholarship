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

    public function ShowFeed()
    {

            $AddScholarship = AddScholarship::orderBy('created_at', 'desc')->take(1)->get();
    
            $feed = Feed::make();
            $feed->title = 'My Blog RSS Feed';
            $feed->description = 'Latest blog posts';
            $feed->link = route('home');
    
            foreach ($posts as $post) {
                $feed->add($AddScholarship->title, $AddScholarship->published_at, route('post.show', $AddScholarship->slug), $AddScholarship->content);
            }
    
            return Response::make($feed->render('rss'))->header('Content-Type', 'text/xml');
    
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
                // $degreeSlugs = 'undergraduate-scholarships';
                $AddScholarship = AddScholarship::whereJsonContains('scholarship_degree', $slug)->paginate(9);

        } else {

                if($request->slug=='scholarship-lists')
                {
                    $banner_img="all-country";
                    $slug="Scholarship Lists";
                    $title="Your Potential: Navigating Scholarships for Educational Excellence";
                    $description="Embark on a journey of educational excellence through scholarships. Explore a diverse range of scholarship opportunities, grants, and financial support to fuel your academic aspirations and shape a promising future.";
                    $keywords="scholarships, education scholarships, academic grants, financial aid, scholarship opportunities, educational funding";
                    $short = 'Scholarships are financial awards given to students to support their education. They are typically based on various criteria such as academic achievement, financial need, extracurricular involvement, community service, specific talents, or personal characteristics. Scholarships can come from a variety of sources including universities, colleges, private organizations, foundations, government agencies, and corporations.'; 
                
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
                        $short = ''; 
                       $AddScholarship=AddScholarship::where('scholarship_country','=',$degreeSlug)->paginate(9);
                   
                    }else{


                        if($degreeSlug=='internships')
                        {
                           $title="Launch Your Career: Explore Exciting Internship Opportunities for Practical Experience";
                           $description="Discover valuable internships that offer real-world experience and skill development. Our comprehensive guide helps you find the perfect internship to kickstart your professional journey and build a strong foundation for your future.";
                           $keywords="internships, professional intern programs, experiential learning, internship opportunities, practical work experience, career development";
                           $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);
                           return view('show-blogs',['AddScholarship'=>$AddScholarship,'slug'=>$degreeSlug,'title'=>$title,'description'=>$description,'keywords'=>$keywords]);
                             
                        }else{
              
                          abort(404);
                
                        } 

                       
                    }
                }

        }

        return view('scholarship-show-by-country',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'banner_img'=>$banner_img ,'title'=>$title,'description'=>$description,'keywords'=>$keywords,'short'=>$short]);
    
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
            $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);

        }else if($degreeSlug=='scholarships-and-study')
        {
            $title="Funding Your Education: Scholarships and Study Opportunities for a Bright Future";
            $description="Discover the perfect blend of scholarships and study programs to fuel your educational journey. Our comprehensive guide offers insights into securing financial aid and finding the right study path for your academic and career aspirations.";
            $keywords="scholarships and study, educational funding, study programs, scholarship opportunities, academic financial aid, higher education support";
            $slug=$degreeSlug;
            $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);
        
        }else if($degreeSlug=='employment-and-profession')
        {
            $title="Unlocking Opportunities: Navigating Employment and Profession Pathways for Success";
            $description="Explore a world of possibilities in employment and profession fields. Our comprehensive guide provides insights into career growth, job opportunities, and professional development, empowering you to thrive in your chosen profession.";
            $keywords="employment and profession, career opportunities, professional growth, job pathways, career development, job prospects, professional success";
            $slug=$degreeSlug;
            $AddScholarship=Blogs::where('blog_category','=',$degreeSlug)->paginate(9);
        
        }
         else {
        
            abort(404);
        
        }

        return view('show-blogs',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'title'=>$title,'description'=>$description,'keywords'=>$keywords]);
    
    }

    public function showAllBlogs(REQUEST $request)
    {
      
            $title="Streamline Your Journey: Essential Application Resources for Success";
            $description="Access a wealth of application resources to enhance your chances of success. Our comprehensive guide provides valuable insights, tips, and tools to help you navigate the application process with confidence and achieve your goals.";
            $keywords="application resources, application tips, application guidelines, application tools, application success, application support";
            $slug='Our  Blogs';
            $AddScholarship=Blogs::where('blog_category','=',['our-blogs'])->paginate(9);

            return view('show-blogs',['AddScholarship'=>$AddScholarship,'slug'=>$slug,'title'=>$title,'description'=>$description,'keywords'=>$keywords]);
    
      
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
