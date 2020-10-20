<?php

namespace App\Http\Controllers;
use App\Officer;
use App\Document;
use App\Prisioner;
use Illuminate\Http\Request;

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
    public function index()
    {
        $user = auth()->user();
        $officer = Officer::count();
        $document = Document::count();
        $prisioner = Prisioner::count();

        if($user['role'] == 'ADMIN'){
            return view('index', [
                'officer' => $officer,
                'document' => $document,
                'prisioner' => $prisioner,
                'user' => $user,
            ]);
        }else{
            return redirect()->route('index');
        }
       
    }
}
