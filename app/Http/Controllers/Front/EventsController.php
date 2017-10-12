<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form\Front\Event\SeatSelectionForm;

class EventsController extends Controller
{
    public function show($event)
    {
        return view('front.events.show');
    }

    public function seatSelection($event)
    {
        $seatSelectionForm = new SeatSelectionForm();

        $seatSelectionForm->setFields();

        $params = compact('seatSelectionForm');
        
        return view('front.events.seat-selection', $params);
    }
}
