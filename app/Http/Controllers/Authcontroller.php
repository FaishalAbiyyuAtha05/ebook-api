<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Authcontroller extends Controller {

    public function me() {
        return [
            "nis" => 3103118059,
            "name" => "Faishal Abiyyu Atha",
            "gender" => "Laki-Laki",
            "phone" => 6283841045998,
            "class" => "XII RPL 2"

        ];
    }
}

