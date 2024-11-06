<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Agency;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function rekomendasiPengepul(Request $request)
    {
        $agencies = Agency::all(['id', 'name', 'address']);
        return response()->json($agencies);
    }
    
    public function itemsByAgency(Request $request)
    {
        $agency_id = $request->input('agency_id');
        if ($agency_id) {
            $items = Item::where('agency_id', $agency_id)->get();
            return response()->json($items);
        }
    }
}
