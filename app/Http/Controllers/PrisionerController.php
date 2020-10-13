<?php

namespace App\Http\Controllers;
use App\Prisioner;
use Illuminate\Http\Request;
use App\Http\Requests\PrisionerRequest;

class PrisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $prisioner = Prisioner::paginate(10);

        return view('prisioners.index', [
            'prisioner' => $prisioner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prisioners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrisionerRequest $request)
    {
        $data = $request->all();

        Prisioner::create($data);

        return redirect()->route('prisioner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prisioner $prisioner)
    {
        return view('prisioners.edit',[
            'item' => $prisioner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrisionerRequest $request, Prisioner $prisioner)
    {
        $data = $request->all();

        $prisioner->update($data);

        return redirect()->route('prisioner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prisioner $prisioner)
    {
        $prisioner->delete();

        return redirect()->route('prisioner.index');
    }
}
