<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        // controller
        if (!empty($url) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method
        if (!empty($url) && isset($url[0])) {
            if (method_exists($this->controller, $url[0])) {
                $this->method = $url[0];
                unset($url[0]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controllers dan method dan jalankan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Periksa apakah kunci 0 ada sebelum mencoba mengaksesnya
            if (array_key_exists(0, $url)) {
                return $url;
            }
        }

        // Kembalikan array kosong jika tidak ada 'url' atau jika 'url' tidak valid
        return [];
    }



}