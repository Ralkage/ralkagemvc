<?php

/**
 * @property mixed $postModel
 */
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        $data = ['title' => 'RalkageMVC'];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = ['title' => 'Abous Us'];
        $this->view('pages/about', $data);
    }
}