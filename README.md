# -- Still in Development! --

## Laravel All Import
[![Latest Stable Version](https://poser.pugx.org/unikat/all-import/v/stable)](https://packagist.org/packages/unikat/all-import)
[![Total Downloads](https://poser.pugx.org/unikat/all-import/downloads)](https://packagist.org/packages/unikat/all-import)
[![License](https://poser.pugx.org/unikat/all-import/license)](https://packagist.org/packages/unikat/all-import)
[![Build Status](https://travis-ci.org/UnikatGmbH/all-import.svg?branch=master)](https://travis-ci.org/UnikatGmbH/all-import)

This package is aiming to simplify the data migration from one database to another.

## Installation
 Require this package with composer
 
 ````
 composer require unikat/all-import
 ````
 
This package requires Laravel 5.5, so it should be discovered automatically.

## Config

Publish the config with

````
php artisan vendor:publish
````

Then you choose the ServiceProvider "AllImportServiceProvider".