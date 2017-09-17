<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Multi Authentication
<p>
	This project I was made From this <a href="https://www.youtube.com/watch?v=iKRLrJXNN4M">Video</a>,You can clone this repository for your bussiness, it's free for use.
</p>

## How to Install this

1.Clone this repository, Using linux command :
```
git clone https://github.com/dekiakbar/multiauth
```
2.Enter the directory :
```
cd /multiauth
```
3.then run the following command in your terminal :
```
composer update
```
4.then run this command to generate new key on your laravel project :
```
php artisan key:generate
```
5.dont forget to change the database name,username and password on **.env** file, then run :
```
php artisan migrate
```