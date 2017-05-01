<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $guarded = ['id'];
    protected $casts = ['labels' => 'array'];

    static public function getRank($num = 5){
        $ranks = Article::orderBy('read_times', 'desc')->limit($num)->get();
        return $ranks;
    }

    static public function getTimeGroup(){
        $timeGroup = [];
        foreach(Article::all() as $ar){
            $time = strtotime($ar->created_at);
            $date = date("Y-m", $time);
            if(!in_array($date, $timeGroup)){
                $timeGroup[] = $date;
            }
        }
        
        return $timeGroup;
    }
}
