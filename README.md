# Memotest with Laravel and GraphQL

## Introduction
Classic Memo-test game created by Next.Js for the frontend and Laravel, GraphQL and Sail for the backend.

This project is divided in two repositories, backend (this repo) and frontend ([nextjs-memo-test](https://github.com/EzeLamar/nextjs-memo-test?tab=readme-ov-file)). 

## Documentation

### Pre-requisistes
#### 1. Docker & WSL2
Install Docker [Docker Desktop](https://www.docker.com/products/docker-desktop/) on your machine. In case you are working on Windows, you have to configure WSL2 and connect Docker with the VM created.  
For More information take a look at this [Laravel Sail on Windows](https://laravel.com/docs/11.x#sail-on-windows) document.

#### 2. Configure Sail Shell Alias
By default, Sail commands are invoked using the `vendor/bin/sail` script. To simplify its call, we will configure a shell alias that allows you to execute Sail's commands more easily adding the next alias on the `~/.bashrc` file:
```bash
#Open on Visual Studio Code the shell configuration file:
code ~/.zshrc
#Copy the next line at the end of the file and save it:
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```
Finally, restart your shell to apply the changes.

#### 3. Localhost Configuration
On the WSL2 console, on the root folder of the project, execute the next command to open the project with Visual Studio Code:
```bash
cd laravel-memo-test
code .
```

Then, on the root folder of the project, create a new file **.env** and copy the content of **.env.example**.

### Installation
After complete the **pre-requisites** Open a console on WLS2 previously configured with Docker and clone this repository. Then, move to the root folder of the project and  application's dependencies by the next command:
```bash
cd laravel-memo-test

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs

```
To build and start all of the Docker containers defined in your application's `docker-compose.yml` file, you should execute the next command:
```bash
sail up -d
```
Once the containers are running if you access to `localhost` on your navigator, you will see an error requesting for an API Key. We have to create it by the next command:
```bash
sail php artisan key:generate
```

Finally, we need to execute the migrations for the database. if you want to fill the project with example memo-tests, use the second command:
```bash
#migrations without mock information
sail php artisan migrate
#migrations with mock information
sail php artisan migrate:fresh --seed
```
The seeder will add:
* 1 User with random name and email
* 1 GameSession in STARTED state
* 2 MemoTests with 4 random images and names each

## Serve the application
Ensure that your application's APP_URL and FRONTEND_URL environment variables are set to `http://localhost:8000` and `http://localhost:3000`, respectively.
If the containers previously created are not running, execute the next command to serve the project:
```bash
sail up -d
```
Finally, when we want to stop the container, execute the next command:
```bash
sail stop
```

## CRUD GraphQL Interface
With the project served and the migrations applied you can access to `localhost/graphiql` to access the graphiQL view that allow us to execute the differnet queries and mutations previously configured on the project.