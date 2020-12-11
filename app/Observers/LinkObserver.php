<?php

namespace App\Observers;

use APP\Models\Link;
use Cache;

class LinkObserver
{
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}
