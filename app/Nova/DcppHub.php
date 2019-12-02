<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields;

class DcppHub extends Resource
{
    public static $group = 'Resources';
    public static $model = \App\DcppHub::class;
    public static $title = 'title';
    public static $search = [
        'id',
        'title',
    ];

    public function fields(Request $request)
    {
        return [
            Fields\ID::make()->sortable(),
            Fields\Text::make('Title'),
            Fields\Text::make('Address'),
            Fields\Number::make('Port'),
            Fields\Select::make('Status')->options([
                \App\DcppHub::STATUS_HIDDEN => 'Hidden',
                \App\DcppHub::STATUS_PUBLISHED => 'Published',
                \App\DcppHub::STATUS_DELETED => 'Deleted',
            ])->displayUsingLabels(),
            Fields\Number::make('Clicks')->exceptOnForms(),
            Fields\DateTime::make('Created At')->exceptOnForms(),
            Fields\DateTime::make('Updated At')->onlyOnDetail(),
        ];
    }
}
