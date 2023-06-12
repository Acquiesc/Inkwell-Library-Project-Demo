<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.events');
    }

    public function createEvent()
    {
        return view('admin.create-event');
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
        $validator = Validator::make($request->all(), [ 
            'title' => 'required',
            'event_date' => 'required',
            'start_time' => 'required',
            'duration' => 'required',
            'max_attendees' => 'required',
            'summary' => 'required',
            'event_img' => 'required',
        ]);

        if($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }

        $event = new Event;
        $event->title = $request->input('title');
        $event->date = $request->input('event_date');
        $event->start_time = $request->input('start_time');
        $event->estimated_duration = $request->input('duration');
        $event->max_attendees = $request->input('max_attendees');
        $event->summary = $request->input('summary');

        if($request->hasFile('event_img')) {
            $file = $request->file('event_img');
            $filename = $file->getClientOriginalName();
            $path = public_path('/images/events/');
            $request->file('event_img')->move($path, $filename);
            $event->img = $filename;
        }
        $event->save();

        return back()->with('success', 'Successfully saved event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        return view('view-event')->with('event', $event);
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
