<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function createEvent()
    {
        return view('events.create');
    }

    public function storeEvent(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required|max:1000',
            'email' => 'required',
            'deadline' => 'required'
        ]);


        $daysLeft = Carbon::now()->diffInDays($req->deadline);

        $event = new Event;
        $event->name = $req->name;
        $event->title = $req->title;
        $event->description = $req->description;
        $event->email = $req->email;
        $event->deadline = $req->deadline;
        $event->days_left = $daysLeft;
        $event->save();

        return redirect()->back()->with('success', 'Event Added! Success');

    }

    public function events()
    {
        $events = Event::all();
        return view('events.events', compact('events'));
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }


    public function updateEvent(Request $req, $id)
    {
        $this->validate($req, [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required|max:100',
            'email' => 'required',
            'deadline' => 'required'
        ]);


        $daysLeft = Carbon::now()->diffInDays($req->deadline);

        $event = Event::find($id);
        $event->name = $req->name;
        $event->title = $req->title;
        $event->description = $req->description;
        $event->email = $req->email;
        $event->deadline = $req->deadline;
        $event->days_left = $daysLeft;
        $event->save();

        return redirect()->route('events')->with('success', 'Event Updated!');

    }

    public function destroyEvent($id)
    {
       Event::destroy($id);
       return redirect()->route('events')->with('success', 'Event Removed!');
    }

    public function test()
    {
    	$event = Event::find(1);
    	$now = Carbon::now();
    	return  $now->diffInDays($event->deadline).'-'. $event->email;
    }
}
