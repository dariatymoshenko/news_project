<?php

namespace App\Controllers\Admin;

use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class AdminCreateNews
{
    public function render()
    {
        $view = new ViewLoader();
        $view->loadTemplate('create_news_admin.php');
    }
}
