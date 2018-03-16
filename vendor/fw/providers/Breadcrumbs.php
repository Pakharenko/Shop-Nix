<?php

namespace fw\providers;

use app\models\Comment;

class Breadcrumbs
{

    public static function crumbs()
    {
        $cur_url = $_SERVER['REQUEST_URI'];

        $urls = explode('/', $cur_url);

        $crumbs = [];

        if ($cur_url == '/') {
            $crumbs[$key]['text'] = 'Главная страница';
        }
        if ($urls[1] == 'catalog') {
            $crumbs[$key]['text'] = 'Каталог товаров';
        }
        if ($cur_url == '/catalog/filter') {
            $crumbs[$key]['text'] = 'Фильтры товаров';
        }
        if ($cur_url == '/cart') {
            $crumbs[$key]['text'] = 'Корзина';
        }
        if ($cur_url == '/user/login') {
            $crumbs[$key]['text'] = 'Вход на сайт';
        }
        if ($cur_url == '/user/register') {
            $crumbs[$key]['text'] = 'Регистрация пользователя';
        }
        if ($urls[1] == 'product') {
            $crumbs[$key]['text'] = 'Товар';
        }

        if (!empty($urls) && $cur_url != '/') {
            foreach ($urls as $key => $value) {
                $prev_urls = array();
                for ($i = 0; $i <= $key; $i++) {
                    $prev_urls[] = $urls[$i];
                }
                if ($key == count($urls) - 1)
                    $crumbs[$key]['url'] = '';
                elseif (!empty($prev_urls))
                    $crumbs[$key]['url'] = count($prev_urls) > 1 ? implode('/', $prev_urls) : '/';

                switch ($value) {
                    case 'category' : $crumbs[$key]['text'] = 'Товары категории';
                        break;
                    case 'post' : $crumbs[$key]['text'] = 'Блог';
                        break;
                    case 'orders' : $crumbs[$key]['text'] = 'Оформление заказа';
                        break;
                    case 'contact' : $crumbs[$key]['text'] = 'Контакты';
                        break;
                    case 'catalog/filter' : $crumbs[$key]['text'] = 'Фильтры товаров';
                        break;
                    case 'search' : $crumbs[$key]['text'] = 'Результаты поиска';
                        break;
                }
            }
        }

        return $crumbs;
    }


    public function subscribe() 
    {

        $subscribe = new Comment;

        if (isset($_POST['subscribe'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];

            $subscribe->setSubscribe($name, $email);
            header("location: /");

        }

    }


}