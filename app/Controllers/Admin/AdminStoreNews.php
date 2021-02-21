<?php


namespace App\Controllers\Admin;


use App\Models\News as NewsModel;

class AdminStoreNews
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function render()
    {
        $model = new NewsModel();
        $model->addNewsOne($this->data['name'], $this->data['short_description'], $this->data['full_description'] );

        header('Location:  http://localhost/my_project/index.php/admin/news');
    }
}