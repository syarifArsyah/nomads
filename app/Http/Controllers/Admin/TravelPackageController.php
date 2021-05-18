<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackegeRequest;
use App\Models\Admin\Travelpackages;
use App\Models\Travelpackages as ModelsTravelpackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Travelpackages::all();
        return view('pages.admin.travel-package.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackegeRequest $request)
    {
        $data = $request->all();
        $data['slug']=Str::slug($request->title);

        // dd($data);
        Travelpackages::create($data);

        return redirect()->route('travel-package.index')->with('success','Data berhasil di simpan');
        // return back()->with('success','Data berhasil di simpan');

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
        $item = Travelpackages::findOrFail($id);

        return view('pages.admin.travel-package.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackegeRequest $request, $id)
    {
        $data = $request->all();
        $data['slug']=Str::slug($request->title);

        $item = Travelpackages::findOrFail($id);

        $item->update($data);

        return redirect()->route('travel-package.index')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Travelpackages::findOrFail($id);
        $item->delete();
        return redirect()->route('travel-package.index')->with('success','Data berhasil di hapus');
    }
}
