<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.welcome');
    }
    public function getAbout() {
        $first = 'Joost';
        $last = 'Bos';

        $fullname =  $first . " " . $last;
        $email = 'ajj.bos89@gmail.com';

        return view('pages.about')->withFullname($fullname)->withEmail($email);
    }
    public function getContact() {
        return view('pages.contact');
    }
}