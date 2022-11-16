<?php

namespace App\Libries;

use Illuminate\Support\Facades\DB;

class Test
{
    public string $name;

    public function __construct()
    {
        $this->name = "zzz";
    }

    public function aa() {
        $this->name = "aaa";

        return $this;
    }

    public function bb() {
        $this->name = "bbb";

        return $this;
    }
}