<?php

namespace App\Observers;

class VersionObserver
{
    public function created() {
        Cache::forget('Version');
    }
}
