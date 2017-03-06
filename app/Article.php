<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getArticles(){
        $names = getNames();
        $descriptions = getDescriptions();
        $labels = getLabels();
        
        return ['names' => $names, 'descriptions' => $descriptions, 'labels' =>$labels];
    }

    public function getNames(){
        $path = storage_path().'/app/article/';
        $handler = opendir($path);
        while(($filename = readdir($handler)) !== false){
            if($filename != '.' && $filename != '..'){
                $filenames[] = $filename;
            }
        }
        closedir($handler);
    
        return $filenames;
    }

    public function getDescriptions(){

    }

    public function getLabels(){

    }
}
