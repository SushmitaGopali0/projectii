<?php

namespace App\Http\Controllers;

use App\Models\AddDesigns;
use App\Models\customization;
use App\Models\DesignCategory;
use App\Models\Visitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    // public function index()
    // {
    //     $category = DesignCategory::all();

    //     $designs = AddDesigns::with(['media' => function ($query) {
    //         // Select a random media item for each design
    //         $query->inRandomOrder()->take(4);
    //     }])
    //         ->has('media', '>=', 4) // Ensure that designs have at least one associated media item
    //         ->get();

    //     return view('client.index', compact('category', 'designs'));
    // }
    public function index()
{
    $category = DesignCategory::all();

    $designs = AddDesigns::with(['media'])
        ->has('media', '>=', 4) // Ensure that designs have at least 4 associated media items
        ->get();

    return view('client.index', compact('category', 'designs'));
}



    public function form()
    {
        $category = DesignCategory::all();
        return view('client.form', compact('category'));
    }
    public function about()
    {
        $category = DesignCategory::all();
        return view('client.about', compact('category'));
    }
    public function profile()
    {
        $category = DesignCategory::all();
        return view('client.profile', compact('category'));
    }

    public function history()
    {
        $category = DesignCategory::all();
        return view('client.history', compact('category'));
    }
    public function contact()
    {
        $category = DesignCategory::all();
        return view('client.contact', compact('category'));
    }
    public function recommendation()
    {
        $category = DesignCategory::all();
        return view('client.recommendation', compact('category'));
    }

    public function category($slug)
    {
        $category = DesignCategory::all();
        $cat = DesignCategory::where('slug', $slug)->first();
        // $designs = AddDesigns::where('category_id', $cat->id)->with('media')->get();
        $designs = AddDesigns::where('category_id', $cat->id)
            ->with(['media' => function ($query) {
                $query->inRandomOrder();
            }])
            ->get();

        // return $designs;
        return view('client.category', compact('category', 'cat', 'designs'));
    }
    public function detail($slug)
    {
        if (auth()->guest()) {
            return redirect()->route('login')->with('message', 'Please login for more details.');
        } else {
            $category = DesignCategory::all();
            $design = AddDesigns::where('slug', $slug)->with('designer', 'media')->first();
            // return $design->media;


            $client  = "27.34.12.251";
            $country  = "Unknown";
            $city  = "Unknown";
            $latitude  = "Unknown";
            $longitude  = "Unknown";

            if (filter_var($client, FILTER_VALIDATE_IP)) {
                $ip = $client;
            } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                $ip = $forward;
            } else {
                $ip = $remote;
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=" . $ip);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $ip_data_in = curl_exec($ch); // string
            curl_close($ch);

            $ip_data = json_decode($ip_data_in, true);
            $ip_data = str_replace('&quot;', '"', $ip_data);

            if ($ip_data && $ip_data['geoplugin_countryName'] != NULL) {
                $country = $ip_data['geoplugin_countryName'];
            }
            if ($ip_data && $ip_data['geoplugin_city'] != NULL) {
                $city = $ip_data['geoplugin_city'];
            }
            if ($ip_data && $ip_data['geoplugin_latitude'] != NULL) {
                $latitude = $ip_data['geoplugin_latitude'];
            }
            if ($ip_data && $ip_data['geoplugin_longitude'] != NULL) {
                $longitude = $ip_data['geoplugin_longitude'];
            }

            //  return request()->userAgent();
            $uris = $_SERVER['REQUEST_URI'];
            $uris = $uris . '/';
            //   $value=print_r(explode('/',$uris));
            $susmita = explode('/', $uris, -1);
            $count = count($susmita);
            $url = $susmita[$count - 1];
            if ($url == '')
                $url = 'home';

            $abc = Visitors::where('ip', $ip)->where('latitude', $latitude)->where('longitude', $longitude)->where('country', $country)->where('slug', $url)->first();
            // return $ip;
            if (!empty($abc)) {
                // if($city != 'unknown'){
                $abc->latitude = $latitude;
                $abc->longitude = $longitude;
                $abc->city = $city;
                $abc->slug = $url;
                $abc->save();
                // }
            }
            if (empty($abc)) {
                $visitor = new Visitors();
                $visitor->ip = $ip;
                $visitor->design_id = $design->id;
                $visitor->country = $country;
                $visitor->latitude = $latitude;
                $visitor->longitude = $longitude;
                $visitor->city = $city;
                $visitor->slug = $url;
                $visitor->save();
            }

            return view('client.detail', compact('design', 'category'));
        }
    }
    public function request($slug)
    {
        $category = DesignCategory::all();
        $design = AddDesigns::where('slug', $slug)->with('designer', 'media')->first();
        return view('client.request', compact('category', 'design'));
    }
    public function customizationstore(Request $request)
    {
        // return $request;
        $requestcustomize = new customization();
        $requestcustomize->design_id = $request->input('design_id');
        // $requestcustomize->designed_by = 1;
        $requestcustomize->designed_by = $request->input('designer_id');
        $requestcustomize->status = 'pending';
        $requestcustomize->request_by = Auth::user()->id;
        $requestcustomize->height = $request->input('height');
        $requestcustomize->width = $request->input('width');
        $requestcustomize->color = $request->input('color');
        $requestcustomize->budget = $request->input('budget');
        $requestcustomize->pattern = $request->input('pattern');
        $requestcustomize->description = $request->input('description');
        $requestcustomize->save();


        return redirect()->route('client.index');
    }
}
