<?php

namespace App\Http\Controllers\front;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    // This method will return all testimonials
    public function index(){
        $testimonials = Testimonial::orderBy('created_at', 'DESC')
                        ->where('status',1)
                        ->get();
        return response()->json([
            'status' => true,
            'data' => $testimonials
        ]);
    }
}
