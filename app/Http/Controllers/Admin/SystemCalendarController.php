<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Venue;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\\App\\Event',
            'date_field' => 'start_time',
            'field'      => 'name',
            'prefix'     => 'Event',
            'suffix'     => '',
            'route'      => 'admin.events.show',
        ],
        [
            'model'      => '\\App\\Meeting',
            'date_field' => 'start_time',
            'field'      => 'attendees',
            'prefix'     => 'Meeting with',
            'suffix'     => '',
            'route'      => 'admin.meetings.edit',
        ],
    ];

    public function index()
    {
        // dd('123');
        $events = [];

        $venues = Venue::all();

        foreach ($this->sources as $source) {
            $calendarEvents = $source['model']::when(request('venue_id') && $source['model'] == '\App\Event', function($query) {
                return $query->where('venue_id', request('venue_id'));
                
            })->get();
            foreach ($calendarEvents as $model) {
                $crudFieldValue = $model->getOriginal($source['date_field']);

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim( " " ." ". $model->{$source['field']}),
                        // . " " . $source['suffix']),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events', 'venues'));
    }
}
