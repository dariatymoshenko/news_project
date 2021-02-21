<?php

namespace App\Services;

use App\Controllers\Admin\AdminCreateNews;
use App\Controllers\Admin\AdminDeleteNews;
use App\Controllers\Admin\AdminStoreNews;
use App\Controllers\Admin\AdminUpdateNews;
use App\Controllers\Frontend\News;
use App\Controllers\Frontend\OneNews;
use App\Controllers\Admin\AdminAllNews;
use  App\Controllers\Admin\AdminEditNews;


class Route
{


    public static function render()
    {

        switch ($_SERVER['PATH_INFO']) {

            case str_replace('/admin/news/', '', $_SERVER['PATH_INFO']) !== ''
                && strpos(str_replace('/admin/news/', '', $_SERVER['PATH_INFO']), 'delete') !== false:
                $controller = new AdminDeleteNews(str_replace('/delete', '', (str_replace('/admin/news/', '', $_SERVER['PATH_INFO']))));

                break;

            case'/admin/news':
                $controller = new AdminAllNews;

                break;

            case str_replace('/admin/news/', '', $_SERVER['PATH_INFO']) !== ''
                && strpos(str_replace('/admin/news/', '', $_SERVER['PATH_INFO']), 'update') !== false:
                $controller = new AdminUpdateNews(
                    str_replace('/update', '', (
                    str_replace('/admin/news/', '', $_SERVER['PATH_INFO']))
                    ),
                    $_REQUEST
                );

                break;
            case '/news/':
            case '/news':
            case  '/':
                $controller = new News;

                break;

            case '/admin/news/create':
                $controller = new AdminCreateNews();

                break;

            case '/admin/news/store':
                $controller = new AdminStoreNews($_REQUEST);


                break;

            case str_replace('/admin/news/edit', '', $_SERVER['PATH_INFO']) !== '':
                $controller = new AdminEditNews(str_replace('/admin/news/', '', $_SERVER['PATH_INFO']));

                break;

            case str_replace('/news/', '', $_SERVER['PATH_INFO']) !== '':
                $controller = new OneNews(str_replace('/news/', '', $_SERVER['PATH_INFO']));

                break;
        }

        $controller->render();
    }
}


