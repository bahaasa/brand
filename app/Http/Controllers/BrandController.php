<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(5);
        return view('brands.index',compact('brands'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'brand' => 'required',
        ]);
  
        Brand::create($request->all());
   
        return redirect()->route('brands.index')
                        ->with('success','Brand created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('brands.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'brand' => 'required',
        ]);
  
        $brand->update($request->all());
  
        return redirect()->route('brands.index')
                        ->with('success','brand updated successfully');
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
  
        return redirect()->route('brands.index')
                        ->with('success','Brands deleted successfully');
    }  //
}
