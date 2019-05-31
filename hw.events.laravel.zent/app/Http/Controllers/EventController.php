<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index(Request $request)
	{
		$events = Event::all();
         // dd($events);die;
         // return views(route('todos.index'));
		return view('event',compact('events'));

	}

	public function create()
	{
		return view('add');
	}
	  public function store(Request $request)
    {
      $data = $request->all();
      Event::Create($data);
   
      return redirect(route('events.index'));
    }

      public function edit(Request $request,$id)
    {
       $event= Event::find($id);
       return view('edit',compact('event','id'));
        // return redirect(route('todos.index'));
    }
      public function update(Request $request,$id)
    {
        Event::find($id)->update($request->all());
        return redirect(route('events.index'));
    }

     public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect(route('events.index'));
    }
}
