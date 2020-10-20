<?php

namespace App\Http\Controllers;
use App\Officer;
use App\Document;
use App\Prisioner;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $officer = Officer::get();
        $document = Document::get();
        $prisioners = Prisioner::get();

        // return view('index');
        return view('welcome', [
            'officer' => $officer,
            'document' => $document,
            'prisioners' => $prisioners,
            'user' => $user,

        ]);
    }

    public function store(OfficerRequest $request)
    {
        $data = $request->all();

        Document::create($data);

        return redirect()->route('officer.index');
    }
}
