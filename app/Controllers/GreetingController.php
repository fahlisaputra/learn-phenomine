<?php

namespace App\Controllers;

class GreetingController
{
    public function hello() {
        $time = date('H:i:s', strtotime('+7 hours'));
        if ($time < 12) {
            $greeting = 'Good Morning';
        } elseif ($time < 18) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }

        $greeting = $greeting . ' and welcome to Phenomine Framework. The current time is ' . $time;

        return view('pages.home', ['message' => $greeting]);
    }
}
