<?php

namespace App\Http\Controllers;
use App\Models\CrudEvents;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {  
            $data = CrudEvents::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'event_name', 'event_start', 'event_end']);
            return response()->json($data);
        }
        // dd('123');
        return view('admin.events.welcome');
    }

    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
           case 'create':
              $event = CrudEvents::create([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);

              return response()->json($event);
              break;
  
           case 'edit':
              $event = CrudEvents::find($request->id)->update([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);
 
              return response()->json($event);
              break;

           case 'delete':
              $event = CrudEvents::find($request->id)->delete();

              return response()->json($event);
             break;
 
           default:
             # ...
             break;
        }
}}
