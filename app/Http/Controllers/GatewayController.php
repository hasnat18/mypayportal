<?php
namespace App\Http\Controllers;

use App\Models\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GatewayController extends Controller
{
    public function index()
    {
        $gateways = Gateway::all();

        return view('gateway.index',['gateways' => $gateways]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Gateway::$rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create the gateway with the UID included
        $gateway = Gateway::create($request->all());
        
        if ($gateway) {
            return response()->json(['message' => 'Gateway created successfully', 'gateway' => $gateway], 201);
        } else {
            return response()->json(['message' => 'Failed to create gateway'], 500);
        }
    }


    public function create(){
        return view('gateway.create');
    }

    public function edit($id){
        $gateway = Gateway::find($id);

        return view('gateway.edit',['gateway' => $gateway]);
    }

    public function show(Gateway $gateway)
    {
        return $gateway;
    }

    public function update(Request $request, Gateway $gateway)
    {
        $validator = Validator::make($request->all(), Gateway::$rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $gateway->update($request->all());
        
        if ($gateway) {
            return response()->json(['message' => 'Gateway updated successfully', 'gateway' => $gateway], 200);
        } else {
            return response()->json(['message' => 'Failed to update gateway'], 500);
        }
    }

    public function destroy(Gateway $gateway)
    {
        $gateway->delete();
        return back()->with('message','Gateway deleted successfully');
    }
}

