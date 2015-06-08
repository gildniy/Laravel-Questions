# Questions

## Installation

First, pull in the package through Composer.

```js
"require": {
    "draperstudio/laravel-questions": "~1.0"
}
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
    'DraperStudio\Questions\QuestionsServiceProvider'
];
```

At last you need to publish and run the migration:

```bash
php artisan vendor:publish && php artisan migrate
```
