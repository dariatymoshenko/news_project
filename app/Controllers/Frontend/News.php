<?php

namespace App\Controllers\Frontend;

use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class News
{
    public function render()
    {
        $model = new NewsModel();
        $view = new ViewLoader();
        $view->loadTemplate('news.php', [
            'data' => $model->getNews(),
        ]);
    }
}
