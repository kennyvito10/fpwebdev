<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About KWCELL
KWCELL is an online marketplace where you can buy smartphones with the best possible price. A WADS project created by Klementinus Kennyvito Salim and Wely Dharma Putra
- Created using Laravel Version 7.1.1
- Database MySQL Service
- Used Google Cloud Platform for cloud storage
- Implemented Cloudflare service

## How to deploy in Google Cloud Platform (GCP)

- Create a Google Cloud Platform virtual machine.
- Set up VM and take the ip from google cloud platform and add record of dns to cloudflare.
- Open ssh server from GCP.
- In the server, download all the extensions needed such as server, install the latest php, apache
- Upload the SQL File
- Create a database from the sql file. (kwcell_api)
- Repeat for a second database (kwcell_api2)
- Create a Google Cloud Platform virtual machine.
- Set up VM and take the ip from google cloud platform and add record of dns to cloudflare.
- Open ssh server from GCP.
- In the server, download all the extensions needed such as server, install the latest php, apache
- Upload Laravel project in zip file
- Move file to /var/www/html
- Unzip the file 
- Restart apache2

## Documentation on how to deploy in Localhost

- Clone all the github needed to your computer.
- Use “composer install” to install all dependencies.
- Rename .env.example to .env
- Rename the database name inside the .env file
- Use “php artisan key:generate” to generate key for the .env
- Create databases with the same name as the one that written in the .env
- Use php artisan migrate in the back end laravel to import all the tables to the localhost sql
- Use “php artisan serve” to run laravel projects on the local apache server, but keep in mind to run all the laravel projects on -   different ports, e.g. 8000, or 8080, and or 8780
- open the 127.0.0.1:[ port ] in the browser and you are good to go.

## How to use KWCELL
- Sign Up
- Sign In
- You can edit name, address in profile
- Choose Product
- Choose quantity
- Go to checkout page
- Order 
