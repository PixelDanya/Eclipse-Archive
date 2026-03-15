<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facts;

class ApiController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->q;

        $cards = Facts::query()
        ->where('title', 'like', '%' . $query . '%')
        ->orWhere('text', 'like', '%' . $query . '%')
        ->get();
        return response()->json($cards);
    }
}
