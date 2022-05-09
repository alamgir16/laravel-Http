<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DemoController extends Controller {
    public function simpleGetHttpRequest() {
        $res = Http::get('http://jsonplaceholder.typicode.com/users',

            ['id' => 1]
        );
        return $res->body();
    }
}
