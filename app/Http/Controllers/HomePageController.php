<?php

namespace App\Http\Controllers;
use App\Officer;
use App\Http\Requests\DocumentRequest;
use App\Document;
use App\Prisioner;
use Carbon\Carbon;
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
        $document = Document::where('user_id', $user['id'])->first();
        $prisioners = Prisioner::get();

        // return view('index');
        return view('welcome', [
            'officer' => $officer,
            'document' => $document,
            'prisioners' => $prisioners,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $data = $request->all();
        $data['expired'] = Carbon::now()->addDay(7)->format('Y-m-d H:i:s');
        $data['user_id'] = $user['id'];

        Document::create($data);

        return redirect()->route('index');
    }
}
