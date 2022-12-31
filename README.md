# Mock Restaurant website with PHP 2 Factor Authentication.

## Overview

This was a final project for the Web Development II Course. This Course covered PHP as a programing language and web development trifecta (HTML,JS,CSS). The project **does not** require to create a two factor authentication. This is a feature that was implemented later.

### Prerequisites

1. PHP based file hosting that suppports `mail()` function for sending out email.
2. Have nodejs and npm installed for building the project

### Purpose

This project started as a academic project where we were required to code a PHP Application. I used HTML and CSS for the front end initially. Later I discovered _Pug (for writing clean HTML)_ and SCSS , So I reconstructed the codebase to use these technologies.
The class was given about a month to complete this project.

### This project demonstrates

- My technical skillset
- My Abilty to write clean code
- My Interest in Web Development
- Performing continual upgrades to add tech

## Scope

The following items are in scope for this build files:

- Adding, viewing, updating, and deleting Menu item
- Viewing, and Deleting Messages
- Viewing, and Deleting reservations
- Two Factor Authentication

The Following items are out of scope for this build:

- The ability to add and remove users.
- The ability to accept payments.



## Usage

##### Install Software

1.  To get started you will need to install as mentioned in the [Prerequisites Section](#Prerequisites):

    1. NodeJS
    2. Npm

- These tools are needed to build the projects

##### Cloning repository & Variable Adding

2. Clone this repository then add the following variables to /src/auth/connect.php

```php
$db_name = ""; # The name of the database.
$user = ""; # The username to use when connecting to the database.
$pass = ""; # The password to use when connecting to the database.
$host = ""; # The hostname or IP address of the database server.
# Additionally, there are two variables related to an admin panel
$myemail = ""; # The email on which the server will send an authentication code.
$adminusername = ""; # The username for the admin panel.
$adminpassword = ""; # The password for the admin panel.
```

##### Install Dependencies

3.  then run
    `npm install`
    This will install all Dependencies to need to build the HTML files

##### Building the project files

4.  To build the project, open Terminal on your machine run `npm run build`
    This command will build your public folder that you can Drag and Drag on your server

## .Htaccess

#### This project uses htaccess to hide file extentions to open the file without a server run the following command using a Terminal in the Main folder

```bash
sed -i '' 's:const ext=".*":const ext=".html":' ./src/pug/inc/link.pug
```

and build the project

This will set the extension to .html so that your browser knows what the files are.

If you don't want to hide extension on your server you can remove this code from `.htaccess` file in the src folder

```apacheconf
# This code hides file extensions to the end of the requested URL.
Options +MultiViews
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^\.]+)$ $1.php [NC,L]

```

## Technologies used

#### Deployment

- Bring your own server must match the [Prerequisites](#Prerequisites)

#### Backend

- PHP
- MySql

#### Frond End

- Pug (HTML template engine)
- Javascript
- Ajax Requests
- Bootstrap
- JQuery
- SCSS
- Tailwind CSS

#### build tools

- Npm
- Webpack
- htaccess

## Wins and Blockers

### Wins

I enjoyed writing:

- Pug and SASS Mixins
- Preventative measures to avoid SQL injections
- Native PHP 2FA authorization

### Blockers

- Unable to Automatically redirect the user upon successful 2FA authentication
  - The way around is that the user has press a button to access the admin panel

### If I were to make this project again, I would:

- Add picture uploading functionality for individual menu items in the admin panel
- Set up ip blocking functionallity for Admin panel access

## Acknowledgments

[Here is a list of all the sources used for the for the project](/src/pug/photocredits.pug).
