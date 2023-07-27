<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vista;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        $sessionId = $request->session()->getId();
        $vista = Vista::where('session_id', $sessionId)->whereDate('created_at', today())->first();  
        if (!$vista) {
            Vista::create([
                'session_id' => $sessionId,
            ]);
        }
        return view('home');
    }
}
