# Indonesian territory
Full list of Indonesian provinces and their cities

> Laravel database seeder (works on all versions)

## Includes

34 Province

489 City (related to their province)



## How to use

Simply place each file in their folders as it's defined and run

```php
php artisan migrate
```

then run

```php
composer dumpautoload
```

and finally you can run your seeder command and import all the lists to your database by one of commands below (depend on your desire)

```php
php artisan db:seed
```
or
```php
php artisan db:seed --Class=ProvincesTableSeeder
php artisan db:seed --Class=CitiesTableSeeder
```

or if you wish to refresh you database

```php
php artisan migrate:refresh db:seed
```

---

Website [CV. IRANDO](https://irando.co.id)

Twitter [Robert Nicjoo](https://twitter.com/robertnicjoo)
