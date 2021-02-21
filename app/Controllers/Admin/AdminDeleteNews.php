<?php


namespace App\Controllers\Admin;


use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class AdminDeleteNews
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $model = new NewsModel();
        $model->delNewsOne($this->id);

        header('Location:  http://localhost/my_project/index.php/admin/news');
    }
}