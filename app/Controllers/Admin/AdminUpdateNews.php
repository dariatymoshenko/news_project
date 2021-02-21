<?php


namespace App\Controllers\Admin;


use App\Models\News as NewsModel;

class AdminUpdateNews
{
    private $data;

    private $id;

    public function __construct($id, array $data)
    {
        $this->data = $data;
        $this->id = $id;
    }

    public function render()
    {
        $model = new NewsModel();
        $model->updateNewsOne($this->id, $this->data['name'], $this->data['short_description'], $this->data['full_description'] );

        header('Location:  http://localhost/my_project/index.php/admin/news');
    }
}