<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return view('brand.index',['brands' => $brands]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Brand::$rules);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        // Upload the logo file to the public/storage/logo directory
        if ($request->hasFile('logo_path')) {
            $logoPath = $request->file('logo_path')->store('logo', 'public');
        } else {
            $logoPath = null; // Set to null if no file is uploaded
        }
    
        // Create the brand with the UID included
        $brand = Brand::create([
            'name' => $request->input('name'),
            'redirect_url' => request()->redirect_url, // Save the path to the uploaded file
            'logo_path' => $logoPath, // Save the path to the uploaded file
            // Add other fields as needed
        ]);
        
        if ($brand) {
            return response()->json(['message' => 'Brand created successfully', 'brand' => $brand], 201);
        } else {
            return response()->json(['message' => 'Failed to create brand'], 500);
        }
    }


    public function create(){
        return view('brand.create');
    }

    public function edit($id){
        $brand = Brand::find($id);

        return view('brand.edit',['brand' => $brand]);
    }

    public function show(Brand $brand)
    {
        return $brand;
    }

    public function update(Request $request, Brand $brand)
    {
        $validator = Validator::make($request->all(), Brand::$rules);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        // Upload the logo file to the public/storage/logo directory if a new file is provided
        if ($request->hasFile('logo_path')) {
            // Delete the existing logo file if it exists
            if ($brand->logo_path) {
                Storage::disk('public')->delete($brand->logo_path);
            }
            // Upload the new logo file
            $logoPath = $request->file('logo_path')->store('logo', 'public');
        }
    
        // Update the brand with the new data
        $brand->update([
            'name' => $request->input('name'),
            'logo_path' => $logoPath, // Save the path to the uploaded file
            'redirect_url' => request()->redirect_url, // Save the path to the uploaded file
        ]);
    
        return response()->json(['message' => 'Brand updated successfully', 'brand' => $brand], 200);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back()->with('message','Brand deleted successfully');
    }
}

