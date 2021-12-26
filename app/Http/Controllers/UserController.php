<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(){
        $User = Auth::user();
        $serieVue = $this->serieVue();
        $temps = $this -> temps();
        $commentsAdmin = Comment::whereRaw("validated=0")->get();
        /*$episodes = $this->episode();
        $comments = $this->commentsutil();*/
        return view('user.user',
            ['user' => $User, 'serieVue' => $serieVue,
             'temps' => $temps,
                'commentsAdmin' => $commentsAdmin]);
    }
    private function serieVue(){
        $User = Auth::user();
        $episodes = $User -> seen;
        $series = [];
        foreach ($episodes as $episode){
            $series[] = $episode -> serie;
        }
        $series=array_unique($series);
        return $series;
    }

    private function temps(){
        $User = Auth::user();
        $temps = DB::select(DB::raw("SELECT SUM(duree)/60 AS somme FROM episodes JOIN seen ON episodes.id = seen.user_id WHERE seen.user_id = " . $User->id))[0]->somme;
        if ($temps == 0){
            return 0;
        }
        else{
            return $temps;
        }
    }
}
