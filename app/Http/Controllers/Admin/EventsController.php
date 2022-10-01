<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Venue;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventsController extends Controller
{
    public function index()
    {
        // dd(abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden'));

        $events = Event::all();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        // abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // dd( $date = $request->start_time);
        $venues = Venue::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.events.create', compact('venues'));
    }

    public function store(StoreEventRequest $request)

    {
        // $newDateTime = date('h:i A', strtotime($currentDateTime));
        
        $event = Event::create($request->all());

        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        // abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $venues = Venue::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $event->load('venue');

        return view('admin.events.edit', compact('venues', 'event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->all());

        return redirect()->route('admin.events.index');
    }

    public function show(Event $event)
    {
        // abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //  $event = Event::all()->pluck('comment', 'id');
        $event->load('venue');

        return view('admin.events.show', compact('event'));
    }
    public function addcomment(UpdateEventRequest $request)
    {
        $event = Event::find($request->id);
        // dd('123');
        // abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // dd($request->id);
        $event->comment = $request->comment;
        // dd($event->comment);
        // $event->load('venue');
        // $comment = $request->comment;
        // dd($comment);
        $event->save();
        // $event->update($comment);

        return redirect()->route('admin.events.index');

    }

    public function destroy(Event $event)
    {
        // abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
