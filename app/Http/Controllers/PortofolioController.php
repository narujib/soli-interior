<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PortofolioController extends Controller
{
    public function index()
    {
        $pageTitle = 'Portofolio';
        $portofolios = Portofolio::latest()->paginate(8);
        return view('portofolios', compact('portofolios', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project_name' => 'required|string|max:255',
            'description'  => 'required|string',
            'client_name'  => 'required|string|max:255',
            'image'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date'         => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 422);
        }

        $slug = Str::slug($request->client_name);
        $count = Portofolio::where('slug', 'LIKE', "$slug%")->count();

        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }

        $portofolio = Portofolio::create([
            'project_name' => $request->project_name,
            'description'  => $request->description,
            'client_name'  => $request->client_name,
            'address'      => $request->address,
            'image'        => $request->image,
            'date'         => $request->date,
            'slug'         => $slug
        ]);

        return response()->json([
            'data' => $portofolio
        ], 201);
    }

    public function show($slug)
    {
        $pageTitle = 'Portofolio';
        $portofolio = Portofolio::where('slug', $slug)->firstOrFail();

        $randomProjects = Portofolio::where('slug', '!=', $slug)
                                    ->inRandomOrder()
                                    ->limit(4)
                                    ->get();

        return view('portofolio-detail', compact('portofolio', 'randomProjects', 'pageTitle'));
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        $portofolio->project_name = $request->project_name;
        $portofolio->description = $request->description;
        $portofolio->client_name = $request->client_name;
        $portofolio->address = $request->address;
        $portofolio->image = $request->image;
        $portofolio->date = $request->date;
        $portofolio->save();

        return response()->json([
            'data' => $portofolio
        ]);
    }

    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete(); 
        return response()->json([
            'message' => 'Data deleted successfully'
        ], 204);
    }
}
