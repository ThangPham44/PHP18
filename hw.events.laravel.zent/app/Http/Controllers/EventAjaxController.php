<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class EventAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //dùng orderBy() để sắp xếp những bản ghi mới nhất lên trên
        $events=Event::orderBy('id','desc')->get();
        return view('event-ajax',compact('events')); 
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
        //
        $event=Event::create($request->all());
        return response()->json(['data'=>$event],200);
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
         $event=Event::find($id);
         return response()->json(['data'=>$event],200);
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
         $event=Event::find($id);
         return response()->json(['data'=>$event],200);
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
         $event=Event::find($id)->update($request->all());
         return response()->json(['data'=>$event],200);
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
         Event::find($id)->delete();
         return response()->json(['data'=>'removed'],200);
    }
}
