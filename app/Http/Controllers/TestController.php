<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request) {
        return view('app');
    }

    // public function create(Request $request) {
    //     return view('users.create');
    // }

    // public function get(Request $request, $id) {
    //     return view('users.get', [
    //         'id' => $id
    //     ]);
    // }
}
