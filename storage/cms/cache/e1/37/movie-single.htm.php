<?php 
use Sasho\Movies\Models\Movie;class Cms5c86700bd1de1913842844_069d7afb5cb37dfc0af278ef6a01ce5aClass extends Cms\Classes\PageCode
{
    
public function onStart(){
        $this['movie'] = Movie::where('slug', '=', $this->param('slug'))->first();
}
}
