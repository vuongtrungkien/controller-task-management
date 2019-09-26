<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public $tasks=[];


    public function index()
    { $tasks = new Task('1','dự án đô thị','quy hoạch đô thị','26-11-2019','bùi quốc an');


        return view('tasks.index',compact('tasks'));
    }



    public function create()
    {
        return view('tasks.create');

    }


    public function store(Request $request)
    {
        $task = new Task($request->id,$request->name,$request->description,$request->date,$request->person);
       array_push($this->tasks,$task);
       return redirect()->route('tasks.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
