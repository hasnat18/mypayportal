<?php
namespace App\Http\Controllers;

use App\Models\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class GatewayController extends Controller
{
    public function index()
    {
        if (!Auth::user()->is_admin) {
            abort(403, 'You do not have permission to perform this action.');
        }
        $gateways = Gateway::all();

        return view('gateway.index',['gateways' => $gateways]);
    }

    public function store(Request $request)
    {
        if (!Auth::user()->is_admin) {
            abort(403, 'You do not have permission to perform this action.');
        }
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
        if (!Auth::user()->is_admin) {
            abort(403, 'You do not have permission to perform this action.');
        }
        return view('gateway.create');
    }

    public function edit($id){
        if (!Auth::user()->is_admin) {
            abort(403, 'You do not have permission to perform this action.');
        }
        $gateway = Gateway::find($id);

        return view('gateway.edit',['gateway' => $gateway]);
    }

    public function show(Gateway $gateway)
    {
        if (!Auth::user()->is_admin) {
            abort(403, 'You do not have permission to perform this action.');
        }
        return $gateway;
    }

    public function update(Request $request, Gateway $gateway)
    {
        if (!Auth::user()->is_admin) {
            abort(403, 'You do not have permission to perform this action.');
        }
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
        if (!Auth::user()->is_admin) {
            abort(403, 'You do not have permission to perform this action.');
        }
        $gateway->delete();
        return back()->with('message','Gateway deleted successfully');
    }
}

