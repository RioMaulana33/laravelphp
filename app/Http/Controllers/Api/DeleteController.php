<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function deleteUser($id){
        $usr = User::find($id);
        if($usr){
            $usr->delete();
            return response()->json([
                'message' => "Data Telah Dihapus",
                'code' => 200
            ]);
        }else{
            return response([
                'message' => "Failed delete data $id / data doesn't exists"
            ]);
        }
    }

}