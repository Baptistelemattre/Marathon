<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Episode;
use App\Models\Serie;
use Faker\Factory;
use App\Models\User;

class SerieController extends Controller
{

    public function liste() {
        $liste = Serie::all();
        $listeCate=[];
        $cateDiff=[];
        foreach ($liste as $cate){
            $listeCate[$cate->genre][]=$cate;
            $cateDiff[]=$cate->genre;
        }
        $cateDiff=array_unique($cateDiff);
        return view('serie.liste', ['fillable' => $listeCate,'cateDiff'=>$cateDiff]);
    }


    public function detail($id){
        $liste = Serie::all();//Peut-être passer en requete sql
        foreach ($liste as $l){
            if($l->id==$id){//si la serie à l'id est trouve
                $ep=Episode::all();
                $listeEp=[];
                foreach ($ep as $e)if($e->serie_id==$id)$listeEp[]=$e;//liste des ep
                $nbEp=count($listeEp);

                $duree=0;
                foreach ($listeEp as $e)$duree+=$e->duree; // on calcule la duree
                $epParSaison=[[]];
                foreach ($listeEp as $e)$epParSaison[$e->saison-1][]=$e;
                $nbSaison=count($epParSaison);
                $listeComment = Comment::all();
                $comment=[];
                foreach ($listeComment as $com)if($com->serie_id==$id)$comment[]=$com;

                $nbCommentaire=count($comment);

                return view('serie.detail', [
                    'fillable' => $l , 'duree'=>$duree ,'epParSaison' => $epParSaison ,'comment' => $comment,
                    'nbEpisode'=>$nbEp , 'nbSaison'=>$nbSaison ,'nbCommentaire'=>$nbCommentaire]);
            }
        }
        return view('erreur');
    }

    public function seriePageAccueil(){
        // Liste des noms recherché
        $listeNom=['Arcane','La Casa de Papel','The Witcher','Squid Game','Narcos'];

        $listeFinal=[];
        $liste = Serie::all();
        foreach ($liste as $l) {
            //Récuperations des séries
            if (in_array($l->nom, $listeNom)) $listeFinal[] = $l;
        }

        // partie aléatoire
        $faker= Factory::create();
        for($a=0;$a<3;$a++){
            //Récupération de 3 série aléatoire
            $listeRandom= $faker ->randomElements($liste,3);
        }
        return view('welcome',['listeAffiche'=>$listeFinal ,'listeRandom'=> $listeRandom]);
    }

    public function recherche(){
        $a=0;
        var_dump($a);
        return view('welcome');
        $listeAffiche=[];
        $liste = Serie::all();//Peut-être passer en requete sql
        foreach ($liste as $l) {
            if (in_array($l->nom, $listeNom)) $listeAffiche[] = $l;
        }
        return view('welcome',['listeAffiche' =>$listeAffiche]);
    }
}