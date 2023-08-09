<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;

class SubscriberController extends Controller
{
    
    public function subscribe(Request $request)
    {
      
        DB::table('subscribers')->insert([
            'email' => $request->email,
        ]);
        return response()->json(['message' => 'Subscription successful']);
    }
}
