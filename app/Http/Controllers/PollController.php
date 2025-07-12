<?php

namespace App\Http\Controllers;

use App\Events\PollUpdated;
use App\Models\PollOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PollController extends Controller
{
    public function index()
    {
        $options = PollOption::all();
        return view('poll', ['options' => $options]);
    }

    public function vote(PollOption $option)
    {
        $option->increment('votes');

        broadcast(new PollUpdated($option->id, $option->votes))->toOthers();

        return redirect('/poll');
    }
}
