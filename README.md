# Mock Restaurant website with PHP 2 Factor Authentication.

## Overview

This project is for a restaurant that is underwater, Customers can use the restaurant by airplane, ship, or Teleporting.
This was a final project for the Web Development II Course. This Course covered PHP as a programing language and web development trifecta (HTML,JS,CSS). Even though this project **did not** require to create a two factor authentication, I did it anyways.

### Prerequisites

1. Docker Desktop (for the non docker version please refer the previous commit the one before docker added)
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

1.  To get started you will need to install as mentioned in the [Prerequisites Section](#Prerequisites)
2.  then run the command sh``` docker compose up ``` 

## Technologies used

#### Deployment

- Docker However, it does not include mail server, so i have disabled the 2FA 

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
