<?php

namespace App\Http\Controllers;
use App\Models\Feedback;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'message' => 'required|string|max:1000',
        ]);

        Feedback::create([
            'user_id' => $request->user_id,
            'message' => $request->message,
        ]);

        return response()->json(['message' => 'Feedback submitted successfully']);
    }
}
