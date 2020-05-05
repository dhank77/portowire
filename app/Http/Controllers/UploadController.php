<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png,svg, gif'
        ]);

        $upload = $request->file('image')->store('uploads');

        return response()->json(['image' => $upload]);
    }
}
