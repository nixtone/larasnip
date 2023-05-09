<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\VersionCollection;
use App\Http\Resources\VersionResource;
use Illuminate\Http\Request;
use App\Models\Version;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index() {
        // return new VersionResource(Version::orderByDesc('release_date')->first());
        // Создаваемый кеш называется 'version' на сутки. Удаление реализовано EventServiceProvider и VersionObserver
        return new VersionResource(Cache::remember('version', 60*60*24, function() {
            return Version::orderByDesc('release_date')->first();
        }));
    }
    public function all() {
        // return new VersionCollection(Version::all());
        return new VersionCollection(Version::paginate(1));
        // return Version::all();
    }
}
