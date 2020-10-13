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
        $officer = Officer::count();
        $document = Document::count();
        $prisioner = Prisioner::count();

        // return view('index');
        return view('index', [
            'officer' => $officer,
            'document' => $document,
            'prisioner' => $prisioner
        ]);
    }
}
