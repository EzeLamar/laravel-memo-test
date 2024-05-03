# Memotest with Laravel and GraphQL

## Introduction
Classic Memo-test game created by Next.Js for the frontend and Laravel, GraphQL and Sail for the backend.

This project is divided in two repositories, backend (this repo) and frontend ([nextjs-memo-test](https://github.com/EzeLamar/nextjs-memo-test?tab=readme-ov-file)). 

## Documentation

### Pre-requisistes
#### Docker & WSL2
Install Docker [Docker Desktop](https://www.docker.com/products/docker-desktop/) on your machine. In case you are working on Windows, you have to configure WSL2 and connect Docker with the VM created.  
For More information take a look at this [Laravel Sail on Windows](https://laravel.com/docs/11.x#sail-on-windows) document.

#### Localhost Configuration
On the root folder of the project, create a new file **.env** and copy the content of **.env.example**. 

### Installation
After complete the **pre-requisites** Open a console on WLS2 previously configured with Docker and clone this repository. Then, move to the root folder of the project and install the composer dependencies with the next commands:
```bash
cd laravel-memo-test
sail composer install
```
After that, run the migrations and start the containers:
```bash
sail php artisan migrate
```
If you want to start the project with mock values on the database, execute the next command instead the previous one:
```bash
sail php artisan migrate:fresh --seed
```
The seeder will add:
* 1 User with random name and email
* 1 GameSession in STARTED state
* 2 MemoTests with 4 random images and names each

## Serve the application
Next, ensure that your application's APP_URL and FRONTEND_URL environment variables are set to http://localhost:8000 and http://localhost:3000, respectively.
Execute the next command to serve the project:
```bash
sail up -d
```
Finally, when we want to stop the container, execute the next command:
```bash
sail stop
```