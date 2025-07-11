<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:25'
        ]);

        $vendor = Vendor::create([
            'name' => $request->name,
            'user_id' => $request->user()->id
        ]);

        return response()->json($vendor, 201);
    }
}
