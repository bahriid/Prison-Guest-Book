<?php

namespace App\Http\Controllers;
use App\Officer;
use App\Http\Requests\DocumentRequest;
use App\Document;
use App\Prisioner;
use App\User;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    public function pdf($id){
        $data = Document::where('user_id', $id)->with('officer', 'prisioner')->first();
        // $pdf = PDF::loadView('pdf', ['data' => $data]);  
        // return $pdf->stream('medium.pdf');
        return view('pdf', [ 
            'data' => $data,
        ]);
        // return view('pdf');
    }

    public function sendpdf($id){
        // $data = Document::where('user_id', $id)->with('officer', 'prisioner')->first();
        $user = Document::where('user_id', $id)->first();
        
        $url = "https://wa.me/".$user['nomorhp']."?text=Halo%2C Pengajuan anda telah selesai%2C silahkan login ulang dan print surat pengajuan anda. Terimakasih";
        return Redirect::to($url);
        
    }
}
