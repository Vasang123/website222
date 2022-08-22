<?php

namespace App\Http\Controllers;

use App\Models\GlobalToDoList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            // dd($request->all());
            $todolists = GlobalToDoList::where('title', 'like', '%'.$request->search.'%')->paginate(10);
        }else{
            $todolists = GlobalToDoList::paginate(5);
        }
        return view('home', compact('todolists'));
    }
}
