<?php

namespace App\Http\Controllers;

use App\Models\GlobalToDoList;
use App\Models\Progress;
use Illuminate\Http\Request;

class GlobalToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('angkatan.create_to_do_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        $todolist = GlobalToDoList::create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GlobalToDoList  $globalToDoList
     * @return \Illuminate\Http\Response
     */
    public function show(GlobalToDoList $globalToDoList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GlobalToDoList  $globalToDoList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todolist = GlobalToDoList::find($id);
        $progress = Progress::where('global_to_do_list_id', $id)->get();
        return view('angkatan.show_to_do_list_details', compact('todolist', 'progress'));
    }
    public function finish($id)
    {
        $todolist = GlobalToDoList::find($id);
        $todolist->status = 'finished';
        $todolist->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GlobalToDoList  $globalToDoList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'list_item' => 'required|string|max:255',
        ]);
        // dd($request->list_item);
        $progress = Progress::create([
            'global_to_do_list_id' => $id,
            'list_item' => $request->list_item,
            'updated_by' => auth()->user()->name,
        ]);

        return redirect()->back()->with('success', 'Progress added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GlobalToDoList  $globalToDoList
     * @return \Illuminate\Http\Response
     */
    public function destroy(GlobalToDoList $globalToDoList)
    {
        //
    }
}
