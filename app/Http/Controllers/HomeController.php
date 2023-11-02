<?php

namespace App\Http\Controllers;

use App\Models\AddDesigns;
use App\Models\customization;
use App\Models\DesignCategory;
use App\Models\User;
use App\Models\Visitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
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


        if (request()->user()->canany(['Designer', 'Admin'])) {

            $users = User::where('role_id', 3)->get();
            $designers = User::where('role_id', 2)->get();

            if (request()->user()->can('Designer')) {
                $id = Auth::user()->id;
                $customizes = customization::where('designed_by', $id)->get();
            } else {
                $customizes = customization::all();
                // $design = AddDesigns::all();

            }
            $trending = DB::table('visitors as v')
            ->leftJoin('add_designs as ad', 'v.design_id', '=', 'ad.id')
            ->select('v.design_id',  'ad.design_name', DB::raw('COUNT(v.design_id) as count'))
            ->groupBy('v.design_id', 'ad.design_name')
            ->orderByDesc('count')
            ->get();

            return view('admin.index', compact('users', 'designers', 'customizes', 'trending'));
        } else {
            // return redirect()->route('admin.index');
            return redirect()->route('client.index');
        }
    }
    public function user()
    {
        $users = User::where('role_id', 3)->get();
        return view('admin.user', compact('users'));
    }
    public function designer()
    {
        $designers = User::where('role_id', 2)->get();
        return view('admin.designer', compact('designers'));
    }
    public function design($id)
    {
        $categorys = DesignCategory::all();
        $designs = AddDesigns::where('designed_by', $id)->with('designer', 'media')->get();
        // return $designs;
        return view('admin.design', compact('designs', 'categorys'));
    }
    public function ApprovedDesign(Request $request, $id)
    {
        $approved = customization::find($id);
        $approved->status = $request->status;
        $approved->save();
        return redirect()->back();
    }
    public function DeclineDesign(Request $request, $id)
    {
        $approved = customization::find($id);
        $approved->status = $request->status;
        $approved->save();
        return redirect()->back();
    }

    public function profile()
    {
        return view('admin.design.profile');
    }

}
