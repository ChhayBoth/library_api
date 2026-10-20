# Library API

A RESTful API built with Laravel for managing a library system.

## Features

- Manage authors
- Manage books
- Manage book types
- Manage relationships between books and authors
- Create, retrieve, update, and delete records through API endpoints
- Store data in a database using Laravel migrations

## Technologies Used

- PHP
- Laravel
- MySQL
- Composer
- Postman for API testing

## Requirements

Make sure you have installed:

- PHP
- Composer
- MySQL
- Laravel-compatible PHP extensions

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/ChhayBoth/library_api.git
   ```

2. Enter the project directory:

   ```bash
   cd library_api
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Create your environment file:

   ```bash
   copy .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your database credentials in `.env`.

7. Run the database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

The API will be available at:

`http://127.0.0.1:8000`

## API Endpoints

| Resource | Method | Endpoint |
|---|---|---|
| Authors | GET | `/api/authors` |
| Authors | POST | `/api/authors` |
| Author | GET | `/api/authors/{author}` |
| Author | PUT/PATCH | `/api/authors/{author}` |
| Author | DELETE | `/api/authors/{author}` |
| Books | GET | `/api/books` |
| Books | POST | `/api/books` |
| Book | GET | `/api/books/{book}` |
| Book | PUT/PATCH | `/api/books/{book}` |
| Book | DELETE | `/api/books/{book}` |
| Book Types | GET | `/api/book-types` |
| Book Types | POST | `/api/book-types` |
| Book Type | GET | `/api/book-types/{book_type}` |
| Book Type | PUT/PATCH | `/api/book-types/{book_type}` |
| Book Type | DELETE | `/api/book-types/{book_type}` |
| Book Authors | GET | `/api/book-authors` |
| Book Authors | POST | `/api/book-authors` |
| Book Author Relationship | GET | `/api/book-authors/{book}/{author}` |
| Book Author Relationship | PUT | `/api/book-authors/{book}/{author}` |
| Book Author Relationship | DELETE | `/api/book-authors/{book}/{author}` |

## API Testing

You can test the API endpoints using Postman. Start the Laravel development server before sending requests.

For POST and PUT requests, select **Body → raw → JSON** in Postman and provide the appropriate JSON data for the resource.

## Security


- Keep `.env` out of version control.
- Do not publish database passwords, API keys, or other private credentials.
- Use `.env.example` to document required environment variables without including secrets.

## License

This project uses Laravel. Refer to the Laravel framework's license and the project's dependency licenses for applicable terms.
