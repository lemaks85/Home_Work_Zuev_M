<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $productCount = Product::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-categories',
            'title' => 'Счетчик продуктов',
            'text' => "Количество продуктов: $productCount",
            'button' => [
                'text' => 'Перейти к списку',
                'link' => '/admin/products',
            ],
            'image' => 'storage/bg.jpg'
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}