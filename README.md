FacebookOAuth plugin for CakePHP 3.x
====================================

Requirements
------------

* CakePHP 3.0+
* PHP 5.2.8+

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require beautifullife/FacebookOAuth
```

Create Facebook app
------------

Go to this link to create app for you:
https://developers.facebook.com/apps/

Install vendor
------------

```
cd FacebookOAuth/
composer update
```

Change your configs
------------

Opening file: FacebookOAuth/src/Controller/FloginController.php for edit.
Change:

```
FB_APP_ID      = 'your_app_id';
FB_APP_SECRET  = 'your_app_secret';
FB_APP_URL     = 'your_app_url';
```

In config/boostrap.php, add code:

```
Plugin::load('FacebookOAuth', ['bootstrap' => false, 'routes' => true]);
```

After login successful, you can get session 'fb_user' to process your app.

Author
------------

Doan Phan Cong Minh.

Dung Nguyen.

Website
------------

http://sheetmusic4you.net

http://vietnamcoffeeplace.com

http://saledream.com
