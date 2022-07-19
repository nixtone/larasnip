<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\team;

class PlayerController extends Controller
{
    public function list() {
        $arPlayer = User::all();
        foreach(Team::all() as $team) $arTeam[$team->id] = $team['name'];
        //dd($arPlayer->teams);
        return view('player.list', compact('arPlayer', 'arTeam'));
    }
    public function new() {
        return view('player.new');
    }
    public function item(User $player) {
        $team = Team::find($player->team_id);
        return view('player.item', compact('player', 'team'));
    }
}
