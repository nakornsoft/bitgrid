# [Bitgrid](https://github.com/nakornsoft/bitgrid)
Laravel CMS

ซอฟต์แวร์ CMS ออนไลน์ที่ออกแบบมาสำหรับธุรกิจขนาดเล็กและฟรีแลนซ์ Bitgrid ถูกสร้างขึ้นโดยนครซอฟต์ ใช้เทคโนโลยีสมัยใหม่ เช่น Laravel, Vite.js, Alpine.js, Tailwind, RESTful API เป็นต้น ด้วยโครงสร้างแบบโมดูลาร์ Bitgrid จึงมอบ App Store ที่ยอดเยี่ยมให้กับผู้ใช้และนักพัฒนา

[English](README.md)
[ภาษาไทย](README-TH.md)

## Requirements

* PHP 8.2 หรือ สูงกว่า
* ฐานข้อมูล (e.g.: MySQL, PostgreSQL, SQLite)
* Redis 5.0.14.1 or higher
* Web Server (eg: Apache, Nginx, IIS)

## Framework

Bitgrid uses [Laravel](http://laravel.com), the best existing PHP framework, as the foundation framework and [Module](https://github.com/nWidart/laravel-modules) package for Apps.

## การติดตั้ง

* Install [Composer](https://getcomposer.org/download) and [Npm](https://nodejs.org/en/download)
* Clone the repository: `git clone https://github.com/nakornsoft/bitgrid.git`
* Install dependencies: `composer install ; npm install ; npm run dev`
* Install Bitgrid:

```bash
php artisan migrate
php artisan module:publish
```

* Create sample data (optional): `php artisan  db:seed --class="SampleSeeder"`
* Username: super@gmail.com Password: 12345678

## Docker

[Docker File](DOCKER.md)

## Passport API
```bash
php artisan passport:install
php artisan passport:client --personal
```

## Deployment
```bash
chown -R www-data:www-data storage
chown -R www-data:www-data bootstrap/cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache

sudo chmod -R 775 storage
sudo chmod -R ugo+rw storage
```

## Schedule
```bash
crontab -e
Add the command below to the last line
* * * * * php /var/www/html/bitgrid/artisan schedule:run
```

## Changelog

Please see [Releases](../../releases) for more information about what has changed recently.

## Security

Please review [our security policy](https://github.com/nakornsoft/bitgrid/security/policy) on how to report security vulnerabilities.

## Credits

* [Nakornsoft](https://www.nakornsoft.com)

## License

Bitgrid is released under the [GNU GENERAL PUBLIC License](license.txt).

