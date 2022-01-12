<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{


//     public function authorize()
// {
//     return true;
// }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('pages.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $this->validate($request,[

            'title'=>'required',
            'description'=>'required'

        ]);

        $post = new Event();

        $post->title=$request->title;
        $post->description=$request->description;

        $validate=$post->save();

        if($validate){
            return back()->with('success','You have successfully created a new event.');
        }
        else{
            return back()->with('error','An error occured, please try again or contact the admin.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event,$id)
    {
        $event = Event::find($id);
        return view('pages.events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event,$id)
    {
        $event = Event::find($id);
        return view('pages.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event,$id)
    {
        $this->validate($request,[

            'title'=>'required',
            'description'=>'required'

        ]);

        $post = Event::find($id);

        $post->title=$request->title;
        $post->description=$request->description;

        $validate=$post->save();

        if($validate){
            return back()->with('success','You have successfully created a new event.');
        }
        else{
            return back()->with('error','An error occured, please try again or contact the admin.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event,$id)
    {
        $delete = Event::find($id);
        $delete->delete();

        if($delete){
            return back()->with('success','You have successfully deleted this event.');

        }else{
            return back()->with('error','An error occured while deleting the event, please try again or contact the admin.');
        }

    }
}
