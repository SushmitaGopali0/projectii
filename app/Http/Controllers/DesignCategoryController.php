<?php

namespace App\Http\Controllers;

use App\Models\DesignCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DesignCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DesignCategory::all();
        // return $category;
        return view('admin.design.category.index', compact('category'));


    }
    public function addcategory(){
        return view('admin.design.category.addcategory');

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

         $request->validate([
            'category_name' => 'required',
        ]);

        $category = new DesignCategory();
        $category->slug = Str::slug($request->category_name.Str::random(40), '-');
        $category->name = $request->category_name;
        $saved = $category->save();
        if($saved){
            return redirect()->route('design.category')->with('message', 'category successfully added');
        }
        else{
            return redirect()->back()->with('message', 'category could not be add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DesignCategory  $designCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DesignCategory $designCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DesignCategory  $designCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = DesignCategory::where('slug', $slug)->first();
        // return $category;
        return view('admin.design.category.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DesignCategory  $designCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = DesignCategory::where('slug', $slug)->first();
        $category->name = $request->category_name;
        $saved = $category->save();
        if($saved){
            return redirect()->route('design.category')->with('message', 'category successfully updated');
        }
        else{
            return redirect()->back()->with('message', 'category could not be update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DesignCategory  $designCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DesignCategory $designCategory)
    {
        //
    }
}
