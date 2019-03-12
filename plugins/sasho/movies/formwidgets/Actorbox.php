<?php namespace Sasho\Movies\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Sasho\Movies\Models\Actor;

class Actorbox extends FormWidgetBase{

    public  function widgetDetails(){
        return [
            'name' => 'Actorbox',
            'description' => 'field for adding actors'
        ];
    }

    public function render()
    {
        $this->prepareVars();
        //dump($this->vars['selectedValues']);
        return $this->makePartial('widget');
    }

    public function prepareVars(){
        $this->vars['id'] = $this->model->id;
        $this->vars['actors'] = Actor::all()->lists('full_name', 'id');
        $this->vars['name'] = $this->formField->getName().'[]';
        if(!empty($this->getLoadValue())){
            $this->vars['selectedValues'] = $this->getLoadValue();
        } else {
            $this->vars['selectedValues'] = [];
        }
    }

    public function getSaveValue($actors)
    {
        $newArray = [];
        foreach ($actors as $actorID){
            if(!is_numeric($actorID)){
                $newActor = new Actor();
                $nameLastname = explode(' ', $actorID);
                $newActor->name = $nameLastname[0];
                $newActor->lastname = $nameLastname[1];
                $newActor->save();
                $newArray[] = $newActor->id;
            }else{
                $newArray[] = $actorID;
            }
        }
        return $newArray;
    }

    public function loadAssets()
    {
        $this->addCss('css/select2.css');
        $this->addJs('js/select2.js');
    }
}
