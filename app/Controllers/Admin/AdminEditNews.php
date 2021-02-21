<?php

namespace App\Controllers\Admin;

use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class AdminEditNews
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        $model = new NewsModel();
        $view = new ViewLoader();
        $view->loadTemplate('update_news_admin.php', [
            'update_news' => $model->getOneNews($this->id),
        ]);
    }
}