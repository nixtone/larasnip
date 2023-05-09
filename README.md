## [Laravel API. Все что необходимо! Json Resource, Resource Collection, Cache, Rate Limit](https://www.youtube.com/watch?v=FjhcY5GbwfE)

### Адреса для GET-запросов
http://127.0.0.1:8000/api/v1  
http://127.0.0.1:8000/api/v1/all

```sh
php artisan make:model Version -m
php artisan make:factory VersionFactory
php artisan make:controller Api/V1/IndexController
php artisan make:resource VersionResource
php artisan make:resource VersionCollection
php artisan make:observer VersionObserver
```
