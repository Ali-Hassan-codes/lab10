<?php

namespace App\Http\Controllers;
use App\Models\Complaint;


use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'category' => 'required',
            'subcategory' => 'required',
            'address' => 'required',
        ]);

        $complaint = Complaint::create([
            'user_id' => $request->user_id,
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'address' => $request->address,
            'status' => 'Pending', // default, not editable by user
        ]);

        return response()->json([
            'message' => 'Complaint submitted successfully',
            'complaint' => $complaint,
        ], 201);
    }
}
