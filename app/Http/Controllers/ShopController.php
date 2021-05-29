<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookdata=Shop::where('producttype','book')->get();
        $cddata=Shop::where('producttype','cd')->get();
        return view('frontend.index',compact('bookdata','cddata'));
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
        // dd($request->except('_token'));
        $request->validate([
            'producttype'=>'required',
            'title'=>'required',
            'firstname'=>'required',
            'surname'=>'required',
            'price'=>'required',
            'pages'=>'required',
        ]);
        Shop::create($request->except('_token'));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Shop::where('id',$id)->first();
        return view('frontend.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'producttype'=>'required',
            'title'=>'required',
            'firstname'=>'required',
            'surname'=>'required',
            'price'=>'required',
            'pages'=>'required',
        ]);
        $shop->update($request->except('_token'));
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        // dd('delete');
        $shop->delete();
        return redirect('/');
    }
}
