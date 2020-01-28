<?php

namespace TotalPHP\MeetUp\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TotalPHP\MeetUp\Models\Participant;
use TotalPHP\MeetUp\Rules\CpfRule;

class ParticipantController extends Controller
{

    public function index()
    {
        return Participant::all();
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'string'],
            'document' => ['required', 'string', new CpfRule],
        ]);

        return Participant::create(
            $validated
        );
    }
}
