<?php 
use Sasho\Movies\Models\Movie;class Cms5c879d4aec42f616745003_5f16120c799d4a2607dc531767b7b6baClass extends Cms\Classes\PageCode
{
    
public function onStart(){
        $this['movies'] = Movie::orderBy('year', 'desc')->paginate(5);
        $this['name'] = Input::get('name');
}
}
