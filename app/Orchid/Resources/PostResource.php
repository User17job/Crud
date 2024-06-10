<?php

namespace App\Orchid\Resources;

use App\Models\Post;
use DateTime;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Post::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('title')
            ->title("Title")
            -> placeholder("Enter Title"),
            Input::make('Content')
            ->title("Content")
            ->placeholder("Enter content"),
            // TextArea::make('textearea')
            // ->title('Comment')
            // ->placeholder("Description"),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('title', 'TiTle'),
            TD::make('content', 'Content'),
            
            TD::make('created_at', 'Date of Creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id', "ID"),
            Sight::make('title', "TITTle"),
            Sight::make('content', "CONTENT"),
            Sight::make('created_at', "DATE OF CREATION"),
            Sight::make('updated_at', "DATE OF UPDATE"),

        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
