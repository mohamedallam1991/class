<?php


namespace App\Http\ViewComposers;
use illuminate\View\View;
use function session;


class AreaComposer
{
    private $area;

    public function compose(View $view)
    {
        if(!$this->area){
            $this->area = \App\Area::where('slug', session()->get('area', config()->get('class.defaults.area')) )->first();
        }
        return $view->with('area', $this->area);
    }


}