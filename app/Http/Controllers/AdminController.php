<?php

namespace App\Http\Controllers;
use App\Models\AddDegree;
use App\Models\Countires;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Models\AddScholarship;
use App\Models\Blogs;
use Yajra\DataTables\DataTables;
use DB;
require base_path('app/Http/index-api/vendors/autoload.php');
use Google;
use Google_Service_Indexing;
use Google_Service_Indexing_UrlNotification;


class AdminController extends Controller
{
     
    public function addDegree(REQUEST $request)
    {
        
        // Replace non-alphanumeric characters with dashes
        $slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($request->degreeName));

        // Remove any leading or trailing dashes
        $slug = trim($slug, '-');
        

        $add_degree = new AddDegree;
        $add_degree->degree = $request->degreeName;
        $add_degree->degree_slug = $slug;
        $add_degree->save();

        if ($add_degree->exists) {

            return response()->json(['success' => true]);
        
        } else {
        
            return response()->json(['success' => false]);
        
        }
        
    }


    public function delDegree(REQUEST $request)
    {

        $degree = AddDegree::find($request->id);

        if ($degree) {
            $degree->delete();
            // Check if the model instance no longer exists in the database after deletion
            if (!$degree->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }


    }


    public function delDegrees(REQUEST $request)
    {

        $degree = Blogs::find($request->id);

        if ($degree) {
            $degree->delete();
            // Check if the model instance no longer exists in the database after deletion
            if (!$degree->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }


    }


    
    public function delScholarship(REQUEST $request)
    {

        $degree = AddScholarship::find($request->id);

        if ($degree) {
            $degree->delete();
            // Check if the model instance no longer exists in the database after deletion
            if (!$degree->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }


    }

    


    public function showCategory()
    {
        
        if (request()->ajax()) {
            $degree = AddDegree::select('*');
            return DataTables::of($degree)
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-danger" id="delDegree'.$row->id.'" onclick="delDegree('.$row->id.')"><i class="fa fa-trash"></i></button>';
            })->make(true);
        }

       return view('admin.show-category');


    }
    
   public function ShowScholarShip(REQUEST $request)
   {

    if (request()->ajax()) {
       
       
        $AddScholarship = AddScholarship::select('*');

        return DataTables::of($AddScholarship)
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-danger" id="delscholarship' . $row->id . '" onclick="delscholarship(' . $row->id . ')"><i class="fa fa-trash"></i></button>
                <a href="'.url("panel/admin/edit/".$row->id).'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
            })
            ->editColumn('scholarship_university_logo', function ($row) {
                // Assuming you have a 'scholarship_university_logo' column in the database that stores the image filename (e.g., logo.png)
                $logoUrl = asset($row->scholarship_university_logo);
                return '<img src="' . $logoUrl . '" alt="University Logo" width="100px" height="100px">';
            })
            ->editColumn('scholarship_banner_img', function ($row) {
                // Assuming you have a 'scholarship_banner_img' column in the database that stores the image filename (e.g., banner.png)
                $logoUrl = asset($row->scholarship_banner_img);
                return '<img src="' . $logoUrl . '" alt="Banner Image" width="100px" height="100px">';
            })
            ->rawColumns(['scholarship_university_logo', 'scholarship_banner_img', 'action'])
            ->make(true);
        
    }



    return view('admin.show-scholarship');

   }

   public function EditScholarShip(REQUEST $request)
   {
     
    $countires=Countires::get();
    $AddDegree=AddDegree::get();
    $AddScholarship = AddScholarship::where('id',$request->id)->first();
    return view('admin.editScholarShip',['countries' => $countires,'AddDegree'=>$AddDegree,'Scholarship'=>$AddScholarship]);
   
   }

   public function EditScholarShipBlog(REQUEST $request)
   {
     
    $EditBlogs = Blogs::where('id',$request->id)->first();
    return view('admin.edit-blog',['EditBlogs'=>$EditBlogs]);
   
   }


    public function showCountry()
    {
        if (request()->ajax()) {
            $Countires = Countires::select('*');
            return DataTables::of($Countires)->make(true);
        }

       return view('admin.show-country');

    }

    public function showSubcribled()
    {

        if (request()->ajax()) {
            $Subscriber = Subscriber::select('*');
            return DataTables::of($Subscriber)->make(true);
        
        }

       return view('admin.show-subcribled');

    }

    public function showBlog()
    {

        if (request()->ajax()) {
            $Blogs = Blogs::select('*');
            
            return DataTables::of($Blogs)
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-danger" id="delscholarship' . $row->id . '" onclick="delscholarship(' . $row->id . ')"><i class="fa fa-trash"></i></button>
                <a href="'.url("panel/admin/edit/blog/".$row->id).'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
            })
            ->editColumn('blog_img', function ($row) {
                // Assuming you have a 'scholarship_university_logo' column in the database that stores the image filename (e.g., logo.png)
                $logoUrl = asset($row->blog_img);
                return '<img src="' . $logoUrl . '" alt="University Logo" width="100px" height="100px">';
            })
            ->editColumn('blog_banner', function ($row) {
                // Assuming you have a 'scholarship_banner_img' column in the database that stores the image filename (e.g., banner.png)
                $logoUrl = asset($row->blog_banner);
                return '<img src="' . $logoUrl . '" alt="Banner Image" width="100px" height="100px">';
            })
            ->rawColumns(['blog_img', 'blog_banner', 'action'])
            ->make(true);
            }

       return view('admin.show-blogs');

    }

    public function addScholarShip()
    {
        
        $countires=Countires::get();
        $AddDegree=AddDegree::get();
        return view('admin.addScholarShip',['countries' => $countires,'AddDegree'=>$AddDegree]);
    }

    public function addCountry()
    {
        
        return view('admin.addCountry');
    }

    public function upload(Request $request)
    {
     
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
           
            $request->file('upload')->move(public_path('images'), $fileName);
       
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                  
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
           
        }
    }

    public function Addcholarship(REQUEST $request){

    

   // Get the original scholarship degree array from the request
    $scholarDegreeArray = $request->input('scholarDegree');

    // Add "all" to the beginning of the array
    array_unshift($scholarDegreeArray, "all");

 

    // Assign the modified array back to the request object
    $request->merge(['scholarDegree' => $scholarDegreeArray]);

    // Now you can encode it to JSON or use it as needed
    $encodedScholarDegree = json_encode($scholarDegreeArray);
  





    $addScholarship = new AddScholarship();
    $addScholarship->meta_title = $request->metaTitle;
    $addScholarship->meta_keyworlds = $request->metaKeyword;
    $addScholarship->meta_description = $request->metaDescription;
    $addScholarship->date = $request->date;
    $addScholarship->time = $request->time;
    $addScholarship->scholarship_name = $request->scholarName;
    $addScholarship->scholarship_slug = $request->scholarSlug;
    $addScholarship->scholarship_country = $request->scholarCountry;
    $addScholarship->scholarship_degree = $encodedScholarDegree;
    $addScholarship->scholarship_description = $request->scholarDecription;
    $addScholarship->scholarship_content = $request->content;
    // $addScholarship->scholarship_website_url = $request->scholarApplyUrl;
    $addScholarship->university_logo_alt_tag = $request->university_logo_alt_tag;
    // $addScholarship->banner_img_alt_tag = $request->banner_img_alt_tag;
    $addScholarship->schemass = $request->schema;
    
   
   

    if($request->hasFile('scholarUniLogo'))
    {
          $dir =  public_path('images/');
          $dir1 = 'images/';            
          $extension = strtolower($request['scholarUniLogo']->getClientOriginalExtension()); // get image extension
          $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
          $request['scholarUniLogo']->move($dir, $fileName);
          $logos1 ="{$dir1}{$fileName}";
          $addScholarship->scholarship_university_logo = $logos1;
            
    }


    if($request->hasFile('bannerImg'))
    {
          $dir =  public_path('images/');
          $dir1 = 'images/';            
          $extension = strtolower($request['bannerImg']->getClientOriginalExtension()); // get image extension
          $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
          $request['bannerImg']->move($dir, $fileName);
          $logos2 ="{$dir1}{$fileName}";
          $addScholarship->scholarship_banner_img = $logos2;
      
    }
   
   
        $addScholarship->save();

        
        $apiKey = 'MjYzZTM0MWMtMjliNC00MTZiLTg1MzktMjU1MWI2YjY4MDE5';
        $appId = '524c15cf-c4d6-4482-9fd0-3d2e7a9133f1';
        $apiEndpoint = 'https://onesignal.com/api/v1/notifications';
        $data = [
            'app_id' => $appId,
            'contents' => [
                'en' => $request->scholarName
            ],
            'included_segments' => ['All'] , // Send to all subscribed users 
            // 'icon' => '', // Image URL
            'chrome_web_image' => asset($logos1),
            'url' =>url($request->scholarSlug), // URL link

        ];
        $payload = json_encode($data);
        $ch = curl_init($apiEndpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Basic ' . $apiKey
        ]);
        $response = curl_exec($ch);
        echo $response;
        curl_close($ch);


    return redirect()->back()->with('success', 'Scholarship Added successfully.');




    }

    public function Editcholarship(REQUEST $request)
    {


    $scholarshipId = $request->input('id'); // Assuming you have a scholarship ID to identify which record to update
    

    // Get the original scholarship degree array from the request
    $scholarDegreeArray = $request->input('scholarDegree');

    // Add "all" to the beginning of the array
    array_unshift($scholarDegreeArray, "all");



    // Assign the modified array back to the request object
    $request->merge(['scholarDegree' => $scholarDegreeArray]);

    // Now you can encode it to JSON or use it as needed
    $encodedScholarDegree = json_encode($scholarDegreeArray);
    
    
     $scholarship = AddScholarship::findOrFail($scholarshipId);
    
    $scholarship->meta_title = $request->input('metaTitle');
    $scholarship->meta_keyworlds = $request->input('metaKeyword');
    $scholarship->meta_description = $request->input('metaDescription');
    $scholarship->date = $request->input('date');
    $scholarship->time = $request->input('time');
    $scholarship->scholarship_name = $request->input('scholarName');
    $scholarship->scholarship_slug = $request->input('scholarSlug');
    $scholarship->scholarship_country = $request->input('scholarCountry');
    $scholarship->scholarship_degree = $encodedScholarDegree;
    $scholarship->scholarship_description = $request->input('scholarDecription');
    $scholarship->scholarship_content = $request->input('content');
    // $scholarship->scholarship_website_url = $request->input('scholarApplyUrl');
    $scholarship->university_logo_alt_tag = $request->input('university_logo_alt_tag');
    // $scholarship->banner_img_alt_tag = $request->input('banner_img_alt_tag');
    $scholarship->schemass = $request->schema;

    if ($request->hasFile('scholarUniLogo')) {
        $dir = public_path('images/');
        $dir1 = 'images/';       
        $extension = strtolower($request->file('scholarUniLogo')->getClientOriginalExtension());
        $fileName = bin2hex(random_bytes(20)) . '.' . $extension;
        $request->file('scholarUniLogo')->move($dir, $fileName);
        $logos1 = "{$dir1}{$fileName}";
        $scholarship->scholarship_university_logo = $logos1;
    }

    if ($request->hasFile('bannerImg')) {
        $dir = public_path('images/');
        $dir1 = 'images/';       
        $extension = strtolower($request->file('bannerImg')->getClientOriginalExtension());
        $fileName = bin2hex(random_bytes(20)) . '.' . $extension;
        $request->file('bannerImg')->move($dir, $fileName);
        $logos2 = "{$dir1}{$fileName}";
        $scholarship->scholarship_banner_img = $logos2;
    }
   
    $scholarship->save();

    return redirect()->back()->with('success', 'Scholarship Updated successfully.');



    }

    public function EditBlog(REQUEST $request)
    {
       
        $addScholarship = Blogs::findOrFail($request->blog_id);
        $addScholarship->meta_title = $request->meta_title;
        $addScholarship->meta_keyworlds = $request->meta_keyworlds;
        $addScholarship->meta_description = $request->meta_description;
        $addScholarship->blog_name = $request->blog_name;
        $addScholarship->blog_slug = $request->blog_slug;
        $addScholarship->blog_category = $request->blog_category;
        $addScholarship->blog_description = $request->blog_description;
        $addScholarship->blog_img_alt_tag = $request->blog_img_alt_tag;
        // $addScholarship->blog_banner_alt_tag = $request->blog_banner_alt_tag;
        $addScholarship->blog_content = $request->blog_content;
        $addScholarship->schemass = $request->schema;

    
        if($request->hasFile('blog_img'))
        {
              $dir =  public_path('blogs_images/');
              $dir1 = 'blogs_images/';            
              $extension = strtolower($request['blog_img']->getClientOriginalExtension()); // get image extension
              $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
              $request['blog_img']->move($dir, $fileName);
              $logos1 ="{$dir1}{$fileName}";
              $addScholarship->blog_img = $logos1;
                
        }
    
    
        if($request->hasFile('blog_banner'))
        {
              $dir =  public_path('blogs_images/');
              $dir1 = 'blogs_images/';            
              $extension = strtolower($request['blog_banner']->getClientOriginalExtension()); // get image extension
              $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
              $request['blog_banner']->move($dir, $fileName);
              $logos2 ="{$dir1}{$fileName}";
              $addScholarship->blog_banner = $logos2;
          
        }
       
       
        $addScholarship->save();
    
        return redirect()->back()->with('success', 'Blogs Updated successfully.');
    


    }


    public function IndexingApi(REQUEST $request){

        return view('admin.indexing-api');
    }

    public function SubmitURL(REQUEST $request)
    {


      
        try {
            $googleClient = new Google\Client();

            $googleClient->setAuthConfig(base_path('app/Http/index-api/service_account_key.json'));
            $googleClient->setScopes(Google_Service_Indexing::INDEXING);
            $googleIndexingService = new Google_Service_Indexing($googleClient);

         
            $urlNotification = new Google_Service_Indexing_UrlNotification([
                'url' => $request->url,
                'type' => 'URL_UPDATED'
            ]);

            $result = $googleIndexingService->urlNotifications->publish($urlNotification);

            if (isset($result->urlNotificationMetadata->latestUpdate["notifyTime"])) {
                 return redirect()->back()->with('success', 'URL submitted successfully.');
            
            } else {
                 return redirect()->back()->with('error', 'URL not  submitted successfully.');
            }

        } catch (\Exception $e) {
                return redirect()->back()->with('error', 'URL not  submitted successfully.');
        }



    }


    public function AddPCountry(REQUEST $request){

    
        $data = [
            'country_code' => $request->scholarCode,
            'slug' => $request->scholarSlug,
            'country_name' => $request->scholarName,
            'country_description' => $request->scholarDecription,
            'category' =>$request->scholarDegree,
            'meta_title' => $request->metaTitle,
            'meta_description' => $request->metaDescription,
            'meta_keywords' => $request->metaKeyword,
            'alt_tag'=>$request->university_logo_alt_tag
        ];
        
        DB::table('countries')->insert($data);

        if($request->hasFile('scholarUniLogo'))
        {
              $dir =  public_path('assets/flag/');
              $extension = strtolower($request['scholarUniLogo']->getClientOriginalExtension()); // get image extension
              $fileName = $request->scholarCode.'.'. $extension; // rename image
              $request['scholarUniLogo']->move($dir, $fileName);
                
        }
    
       
        return redirect()->back()->with('success', 'Country Added successfully.');
    
        }
    

    
    public function AddBlogs(REQUEST $request){

        
        $addScholarship = new Blogs();
        $addScholarship->meta_title = $request->meta_title;
        $addScholarship->meta_keyworlds = $request->meta_keyworlds;
        $addScholarship->meta_description = $request->meta_description;
        $addScholarship->blog_name = $request->blog_name;
        $addScholarship->blog_slug = $request->blog_slug;
        $addScholarship->blog_category = $request->blog_category;
        $addScholarship->blog_description = $request->blog_description;
        $addScholarship->blog_img_alt_tag = $request->blog_img_alt_tag;
        // $addScholarship->blog_banner_alt_tag = $request->blog_banner_alt_tag;
        $addScholarship->blog_content = $request->blog_content;
        $addScholarship->schemass = $request->schema;

    
        if($request->hasFile('blog_img'))
        {
              $dir =  public_path('blogs_images/');
              $dir1 = 'blogs_images/';            
              $extension = strtolower($request['blog_img']->getClientOriginalExtension()); // get image extension
              $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
              $request['blog_img']->move($dir, $fileName);
              $logos1 ="{$dir1}{$fileName}";
              $addScholarship->blog_img = $logos1;
                
        }
    
    
        if($request->hasFile('blog_banner'))
        {
              $dir =  public_path('blogs_images/');
              $dir1 = 'blogs_images/';            
              $extension = strtolower($request['blog_banner']->getClientOriginalExtension()); // get image extension
              $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
              $request['blog_banner']->move($dir, $fileName);
              $logos2 ="{$dir1}{$fileName}";
              $addScholarship->blog_banner   = $logos2;
          
        }
       
       
        $addScholarship->save();
    
    
        return redirect()->back()->with('success', 'Blogs Added successfully.');
    
    
    
    
        }
        
}
