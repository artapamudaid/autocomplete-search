<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');
        $filterResult = User::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
