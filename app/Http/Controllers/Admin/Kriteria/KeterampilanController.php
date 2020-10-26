<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Keterampilan;
use Illuminate\Http\Request;

class KeterampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'keterampilan' => 'required|string|max:100'
        ]);

        $data = $request->all();

        Keterampilan::create($data);

        return redirect()->route('daftar-kriteria');
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
    public function edit($id)
    {
        $item = Keterampilan::findOrFail($id);

        return view('pages.admin.keterampilan.edit',['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Keterampilan::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Keterampilan::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}
