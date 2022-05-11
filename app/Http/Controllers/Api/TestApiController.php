<?php
namespace App\Http\Controllers\Api;

use App\Name;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TestApiController extends Controller
{
  
    public function create(Request $request) {

        try{
            $newName = Name::create([
                'name' => $request->input('name'),
                'user_id' => 1]);
        }
        catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }

            return response()->json([
                'success' => true,
            ]);

    
    }

 
}
