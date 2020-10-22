<?php

namespace App\Http\Controllers;
use App\Officer;
use App\Document;
use App\Prisioner;
use Illuminate\Http\Request;

class DocumentController extends Controller
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
        // $officer = Officer::count();
        $document = Document::with('officer', 'prisioner')->get();
        // $prisioner = Prisioner::count();

        return view('document.index', [
            // 'officer' => $officer,
            'document' => $document,
            // 'prisioner' => $prisioner,
            'user' => $user,
        ]);
    }

    public function show($id)
    {
        $user = auth()->user();
        $officer = Officer::get();
        $document = Document::where('id', $id)->first();
        return view('document.edit', [
            'officer' => $officer,
            'document' => $document,
            // 'prisioner' => $prisioner,
            'user' => $user,
        ]);

    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $officer = Officer::get();
        $document = Document::where('id', $request['id'])->first();
        $document['status'] = 'APPROVED';
        $document['officers_id'] = $request['officer_id'];
        $document->save();
        return redirect()->route('dashboard.document');

    }

    public function destroy(Document $document)
    {
        $document->delete();

        return redirect()->route('dashboard.document');
    }
}
