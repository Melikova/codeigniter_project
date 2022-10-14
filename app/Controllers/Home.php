<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $lang_query = $db->query('SELECT * FROM languages;');
        $testimonial_query = $db->query('SELECT * FROM view_testimonial;');
        $data=[
            'langArr'=>$lang_query->getResultArray(),
            'testimonialsArr'=>$testimonial_query->getResultArray()
        ];
        // echo "<pre>", print_r($data), "</pre>";

        return view('home', $data);
    }
}
