<?php

namespace App\Http\Controllers;

use App\Models\AddDesigns;
use App\Models\media;
use App\Models\DesignCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddDesignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = AddDesigns::with('category','media')->get();

        // return $category;
       return view('admin.design.index', compact('category'));
    }
    public function adddesign(){
        $category = DesignCategory::all();
        return view('admin.design.adddesign', compact('category'));
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
        // return $request;
        $request->validate([
            'category_id' => 'required',
            'design_name' => 'required',
            'price' => 'required',
            'height' => 'required',
            'width' => 'required',
            'description' => 'required',
        ]);

        $category = new AddDesigns();
        $category->slug = Str::slug($request->category_id.Str::random(40), '-');
        $category->designed_by = 1;
        $category->category_id = $request->category_id;
        $category->design_name = $request->design_name;
        $category->price = $request->price;
        $category->height = $request->height;
        $category->width = $request->width;
        $category->description = $request->description;
        $saved = $category->save();
        if($request->has('image')){
            foreach($request->image as $image){ //$image is for multiple images
                $media = new media();
                $fileNameExt = $image->getClientOriginalName(); //this is for original image name saved in the device
                $fileName = $fileNameExt;

                $fileExt = $image->getClientOriginalExtension(); //this is for image extension like .png .jpg etc
                $fileNameToStore = $fileName . '_'.time() . '.' . $fileExt; //this is for unique image name...... same name xa vane time lea garda xutai xutai banauxa
                $image->storeAs('public/images', $fileNameToStore); //this is defining where to store images
                $media->design_id = $category->id;
                $media->image = $fileNameToStore;
                $media->save();
            }
        }

        if($saved){
            return redirect()->route('design.index')->with('message', 'design successfully added');
        }
        else{
            return redirect()->back()->with('message', 'design could not be add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddDesigns  $addDesigns
     * @return \Illuminate\Http\Response
     */
    public function show(AddDesigns $addDesigns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddDesigns  $addDesigns
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = AddDesigns::where('slug', $slug)->first();
        $design_category = DesignCategory::all();
        // return $category;
        return view('admin.design.editdesign', compact('design_category','category'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddDesigns  $addDesigns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'category_id' => 'required',
            'design_name' => 'required',
            'price' => 'required',
            'height' => 'required',
            'width' => 'required',
            'description' => 'required',
        ]);

        $category = AddDesigns::where('slug', $slug)->first();
        $category->slug = Str::slug($request->category_id.Str::random(40), '-');
        $category->category_id = $request->category_id;
        $category->design_name = $request->design_name;
        $category->price = $request->price;
        $category->height = $request->height;
        $category->width = $request->width;
        $category->description = $request->description;
        $saved = $category->save();
        if($request->has('image')){
            foreach($request->image as $image){
                $media = new media();
                $fileNameExt = $image->getClientOriginalName();
                $fileName = $fileNameExt;

                $fileExt = $image->getClientOriginalExtension();
                $fileNameToStore = $fileName . '_'.time() . '.' . $fileExt;
                $image->storeAs('public/images', $fileNameToStore);
                $media->design_id = $category->id;
                $media->image = $fileNameToStore;
                $media->save();
            }
        }

        if($saved){
            return redirect()->route('design.index')->with('message', 'design successfully added');
        }
        else{
            return redirect()->back()->with('message', 'design could not be add');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddDesigns  $addDesigns
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $design = AddDesigns::where('slug', $slug)->first();
       $delete = $design->delete();
       if($delete){
        return redirect()->back()->with('message', 'Design deleted successfully');
       }

    }
}
