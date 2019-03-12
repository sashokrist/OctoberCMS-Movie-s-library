<?php 
use Sasho\Movies\Models\Movie;class Cms5c875e98c1aee175112763_86c67b4885e8710c3068313df2c69451Class extends Cms\Classes\PageCode
{
    
public function onStart(){
        $this['movies'] = Movie::take(4)->get();

}
}
