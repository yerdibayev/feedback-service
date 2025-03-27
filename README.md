## About

A Laravel-based feedback management system with a RESTful API. It contains a simple CRUD for feedbacks.
This project was developed as a test task.

## Used patterns

- Resource pattern
- Service pattern
- Repository pattern

## Installation

1. download/clone the project.
2. run `docker compose up --build -d`.
3. run `docker exec -it feedback_service_app composer install`.
4. run `docker exec -it feedback_service_app php artisan migrate`.
5. access https://127.0.0.1:8800.
6. docs http://127.0.0.1:8800/api/documentation/

![img_1.png](img_1.png)
![img.png](img.png)

## API Documentation

The API documentation is available at http://127.0.0.1:8800/api/documentation/.