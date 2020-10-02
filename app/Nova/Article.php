<?php

namespace App\Nova;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;
use Johnathan\NovaTrumbowyg\NovaTrumbowyg;

class Article extends Resource
{
  
    public static $model = \App\Models\Article::class;

  
    public static $title = 'title';


    public static $search = [
        'id','title'
    ];

 
    public function fields(Request $request)
    {
        return [
            BelongsTo::make(__('Autore'),'user',User::class),
            ID::make(__('ID'), 'id')->sortable(),
            Text::make(__('Titolo'),'title')->rules('required'),
            NovaTrumbowyg::make(__('Descrizione'),'description')->rules('required'),
            Image::make(__('Immagine'),'img')->rules('required'),
            Boolean::make(__('Pubblicato'),'published')->rules('required'),
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

  
    public function filters(Request $request)
    {
        return [];
    }

    
    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }

}
