<?php

namespace Modules\Market\Support;

use Illuminate\Support\Facades\Http;

class Market
{
    public static function download()
    {
    }

    public static function getRemoteProjects($url)
    {
        $return = Http::get($url)->json();
        return $return;
    }
}
