<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $categoryCount = Category::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-categories',
            'title' => 'Счетчик категорий',
            'text' => "Количество категорий: $categoryCount",
            'button' => [
                'text' => 'Перейти к списку',
                'link' => '/admin/categories',
            ],
            'image' => 'storage/bg.jpg'
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
