# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) CSS
framework by default. You can, however, replace it with any other library or
custom styles.

# csc648_team5
I have created a About page for our group at here: [Group 5 About Page](http://sfsuse.com/~su17g05/)

### M0
Run the following commands under 'public_html' to clone the project to your individual shell account for testing
```
git init    //Create an empty Git repository
git remote add origin https://github.com/tycku/csc648_team5.git          //Add remote repository
git fetch                           //Fetch all data
git checkout <Your Branch Name>    //Change current branch to your branch
chmod -R 766 tmp/ logs/            //Change folder permission to give log and tmp the right permission
```

Visit your individual page at http://sfsuse.com/~username/    (change 'username' to your login username) if you able to see our team about page without any error message which mean everything is working properly.

Because the master branch is connecting to our team database so you will need to change it to your own database 
open "~/public_html/config/app.php" with your favorite editor, go to line 220 you should see 'Datasources', 
change 'username' => 'your login username', 
       'password' => 'your student ID', 
       'database' => 'student_username'  (For example my username is 'dmao1' here will be 'student_dmao1')
Save and exit
go to http://sfsuse.com/~username/pages If everything is grean you are ready to go.

now cd into this foler ```cd ~/public_html/src/Template/About```
You should see at leaset two files 'index.ctp' and 'andy.ctp'
'index.ctp' is our group about page, edit 'index.ctp' and add your own button that link to your about page (.ctp file).
Create your own .ctp file this will be your about page.





