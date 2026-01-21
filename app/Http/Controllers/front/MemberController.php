<?php

namespace App\Http\Controllers\front;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::where('status',1)
                   ->orderBy('created_at', 'DESC')
                   ->get();

        return response()->json([
            'status' => true,
            'data' => $members
        ]);
    }
}
