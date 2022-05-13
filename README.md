## Laravel Creative

[Плейлист](https://www.youtube.com/watch?v=BUiZDl3cokQ&list=PLd2_Os8Cj3t8pnG4ubQemoqnTwf0VFEtU)

Стоп: [23. Вывод ошибок при создании поста](https://www.youtube.com/watch?v=m5jKAtF0Gfw&list=PLd2_Os8Cj3t8pnG4ubQemoqnTwf0VFEtU&index=24)
- В 9 уроке был показан трюк с guarded в модели, который пропускает поля в create()
- В 13 уроке, установить "[doctrine/dbal](https://packagist.org/packages/doctrine/dbal)" для редакции миграций, команды из урока:

```sh
php artisan make:migration add_column_description_to_posts_table
(можно вместо '_to_posts_table' написать '--table="people"')  
php artisan make:migration delete_column_description_to_posts_table
php artisan make:migration edit_column_content_to_posts_table
php artisan make:migration change_column_post_content_to_posts_table
php artisan make:migration delete_table_from_posts
```

- В 17 уроке, Действия, выполняемые [ресурсными контроллерами](https://laravel.su/docs/8.x/controllers#actions-handled-by-resource-controller)
- В 18 уроке, была проблема с очередностью выполнения миграций, решилось переименованием миграции категорий на более раннюю дату от миграции с постами.

## Lectoria

[Аутентификация](https://www.youtube.com/watch?v=prl9r8nBJ5w&list=PLbdTa1GXiMEcIrVQPsGtm0wruT7WeufHp&index=9)

## Расширения

[Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)

```sh
composer require barryvdh/laravel-debugbar --dev    
```

## TODO

- public_path или asset
- своя 404
- Хлебные крошки
- Пагинация
