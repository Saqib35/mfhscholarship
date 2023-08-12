@extends('layouts.main')

@section('css')
<title>MFH Scholarship – Worldwide Scholarships and Internships at One Place</title>
    <meta name="description" content="description"/>
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="{{  Request::fullUrl() }}"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="MFH Scholarship – Worldwide Scholarships and Internships at One Place"/>
    <meta property="og:description" content="description"/>
    <meta property="og:url" content="{{  Request::fullUrl() }}"/>
    <meta property="og:site_name" content="MFH Scholarship"/>
    <meta property="og:image" content="{{ url('assets/logo.png') }}"/>
    <meta property="og:image:secure_url" content="{{ url('assets/logo.png') }}"/>
    <meta property="og:image:width" content="512"/>
    <meta property="og:image:height" content="512"/>
    <meta property="og:image:alt" content="MFH Scholarship"/>
    <meta property="og:image:type" content="image/jpeg"/>

@endsection

@section('main')
    
   
   <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/terms-and-condition.webp') }}');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h1 class="breadcrumb-title text-white">Terms & conditions</h1>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="text-white">Terms & conditions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Faq Section Start -->
    <div class="section section-margin">

        <!--Accordion area-->
        <div class="accordion_area">
            <div class="container">
                <div class="row mb-n8">
                    <p class="text-black" align="justify">Your use of the <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> is subject to the terms and conditions listed below (the "Terms"). Before using the website, please read the Terms carefully. </p>
                     <ul>
                        <li>1. You agree to be bound by the Terms by using the Website. Please refrain from using the Website if you do not agree to the Terms. </li>
                        <li>2. You may only use the website for your own personal, noncommercial purposes. The Website cannot be used for any commercial endeavors. </li> 
                        <li>3. You are not permitted to use the Website in any way that would harm, disable, overburden, or impair it, or that might obstruct someone else from using and enjoying the Website. </li>
                        <li>4. Ownership Rights - The owner of the website or its licensors are the only owners of all content on the website, and all such content is protected by copyright, trademark, and other intellectual property laws. The Content consists of text, photos, music, video, and software, among other things. You are not permitted to use the Content in any way that violates the website owner's or its licensors' intellectual property rights. </li>
                        <li>5. Information You Submit Any Data You Submit to the Website.</li>
                        <li></li>
                        <li></li>
                        <li></li>

                    </ul>
                    <h3>•	Terms of use</h3>
                    <p class="text-black" align="justify">The <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> offers details about scholarships, fellowships, and other possibilities for studying abroad.</p>
                    <p class="text-black" align="justify">The <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> neither manages nor administers scholarship or fellowship programs nor does it offer scholarships or fellowships. The management of any scholarship or fellowship program for which it offers information is not the responsibility of the <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a>.</p>
                    <p class="text-black" align="justify">The <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> offers links to other websites that offer details on fellowships and scholarships. The <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> has no control over these external websites, and as a result, the <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> is not liable for the truthfulness, relevance, or content of the material found there.</p>
                    <p class="text-black" align="justify">The <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> neither recommends nor endorses any specific fellowship or scholarship program nor does it make any claims regarding the caliber of the offerings.</p>
                    <p class="text-black" align="justify">The <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> does not gather any personal data from website visitors. However, the <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> may gather general data on how people use the website. This data is not disclosed to outside parties and is only used to enhance the website's content.</p>
                    <p class="text-black" align="justify">You accept these terms of usage by using <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a>. You shouldn't use the <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> if you disagree with these terms of usage.</p>
                     <h3>•	Parties to the terms of use agreement</h3>   
                     <p class="text-black" align="justify">You accept the terms of service that apply to each online service you use. The legally binding guidelines that you must abide by when using the service are the terms of service. You and the business offering the service are the only parties to the terms of the service contract.</p>
                     <p class="text-black" align="justify">You and the <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> have a contract that governs the service agreement's terms. You consent to abide by the guidelines outlined in the contract. The <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> may file a lawsuit if you violate the terms.</p>
                     <p class="text-black" align="justify">As part of a service agreement, you might consent to the following:</p>
                     <p class="text-black" align="justify">- You won't use the service for any illicit activities.</p>
                     <p class="text-black" align="justify">- You won't attempt to access areas of the service that are off-limits.</p>
                     <p class="text-black" align="justify">- You won't attempt to harm the service or prevent other users from using it.</p>
                     <p class="text-black" align="justify">- You won't let anyone else use your account.</p>
                     <p class="text-black" align="justify">- You won't abuse the system by spamming other users.</p>
                     <p class="text-black" align="justify">- You won't take part in phishing or other scams using the service.</p>
                     <p class="text-black" align="justify">- You won't employ the service to spread malware.</p>
                     <p class="text-black" align="justify">- You won't conduct denial-of-service attacks using the service.</p>
                     <p class="text-black" align="justify">- You won't attempt to decompile the service.</p>
                     <p class="text-black" align="justify">- You won't use the service in a way that infringes on the rights of other users or violates the company's or other users’ intellectual property.</p>
                     <h3>•	We have the authority to give changes to these terms and our site</h3>
                     <p class="text-black" align="justify">These Terms of Use are subject to periodic revision and updating at our sole discretion. All modifications take effect the moment we post them and are applicable to all future accesses and uses of the website. Following the publishing of the updated Terms of Use, you are deemed to have accepted and agreed to the changes if you continue to use the website. </p>
                     <p class="text-black" align="justify">Occasionally, we might add to, move, or delete elements of our website for a variety of reasons, including but not limited to the ones listed below:</p>
                     <p class="text-black" align="justify">To make the website better</p>
                     <p class="text-black" align="justify">The "Last Updated" date at the top of these Terms of Use will be updated whenever we make significant changes, and the updated Terms of Use will be posted on the website. To keep current with our updates, we recommend you review our Terms of Use on a regular basis.</p>
                     <p class="text-black" align="justify">You agree to be governed by the updated Terms of Use by continuing to access or use the website after such updates take effect.</p>
                     <h3>•	Do not rely on the information on this site</h3>
                     <p class="text-black" align="justify">It is significant to remember that the content on this website is provided merely for informational reasons and should not be used as financial or legal advice. Before making any decisions based on the material on this site, you should always seek the advice of a trained professional as the site makes no guarantees as to its accuracy, completeness, or timeliness.</p>
                     <h3>•	We are not responsible for viruses</h3>
                     <p class="text-black" align="justify">When visiting and using our website, it is the user's obligation to make sure they are doing so on a safe and secure computer. We cannot promise that there are no hazardous viruses or other elements on our website. As a result, we disclaim all liability for any harm that your computer may sustain as a result of accessing our website.</p>
                     <h3>•	Submissions</h3>
                     <p class="text-black" align="justify">The scholarship committee will examine your application once it is complete. The committee will let you know if you've been chosen as a beneficiary. Be careful to express gratitude to the committee for its thoughtfulness and time. </p>
                     <p class="text-black" align="justify">Without your consent, we may utilize the entirety of the submission's content. </p>
                     
            
                </div>
            </div>
        </div>
        <!--Accordion area end-->
    </div>
    <!-- Faq Section End -->
@endsection

@section('js')

@endsection
