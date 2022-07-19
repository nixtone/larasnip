<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game;
use App\Models\team;
use App\Models\team_game;
use App\Models\user_game;

class GameController extends Controller
{
    public function list() {
        $arGame = Game::all();
        return view('game.list', compact('arGame'));
    }
    public function new() {
        return view('game.new');
    }
    public function item(Game $game) {
        $team = Team::find($game->team_id);
        $arGameRequest = team_game::query()->where('game_id', $game->id)->get();
        /*foreach($arGameRequest as $gameRequest) {
            $arPlayerRequest = user_game::query()->where('tg_id', $gameRequest->id)->count();
            break;
        }*/
        return view('game.item', compact('game', 'team', 'arGameRequest')); // , 'arPlayerRequest'
    }
}
