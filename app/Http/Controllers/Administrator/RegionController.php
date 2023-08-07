<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DocumentRouteDetail;


class RegionController extends Controller
{
    //


    public function store(Request $req){
        $req->validate([
            'region' => ['required']
        ]);

        Region::create([
            'region' => $req->region
        ]);
    }

    public function update(Request $req, $id){
        $req->validate([
            'region' => ['required'],
        ]);

        $data = Region::find($id);
        $data->region = $req->region;
        $data->save();

        return response()->json([
            'status' => 'updated'
        ], 200);
    }

    public function destroy($id){
        $data = DocumentRouteDetail::destroy($id);
        return response()->json([
            'status' => 'deleted'
        ], 200);
    }

}
