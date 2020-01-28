<?php

namespace TotalPHP\MeetUp\Http\Controllers;

use App\Http\Controllers\Controller;
use TotalPHP\MeetUp\Models\Meetup;

class MeetupController extends Controller
{

    public function index()
    {

        return Meetup::all();

    }
}
