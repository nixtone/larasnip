<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;
use App\Models\User;

class TeamController extends Controller
{
    public function list() {
        $arTeam = Team::all();
        return view('team.list', compact('arTeam'));
    }
    public function new() {
        return view('team.new');
    }
    public function item(Team $team) {
        //$team = Team::find($team)->first();
        $arPlayer = User::query()->where('team_id', $team->id)->get();

        //dd($team);
        //$team = Team::find($team);



        return view('team.item', compact('team', 'arPlayer'));
    }
}
