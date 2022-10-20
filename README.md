
# EDUREY API
> Postman Fork Link<br><br>
[![Fork in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/14787201-c3f7ccc8-81b6-4a01-9018-1f433370da4e?action=collection%2Ffork&collection-url=entityId%3D14787201-c3f7ccc8-81b6-4a01-9018-1f433370da4e%26entityType%3Dcollection%26workspaceId%3D459e8a89-2cdd-45e7-aa7b-d1c88aaaa19a#?env%5BSettings%5D=W3sia2V5IjoiYmFzZVVybCIsInZhbHVlIjoibG9jYWxob3N0OjgwMDAvYXBpIiwiZW5hYmxlZCI6dHJ1ZSwidHlwZSI6ImRlZmF1bHQiLCJzZXNzaW9uVmFsdWUiOiJsb2NhbGhvc3Q6ODAwMC9hcGkiLCJzZXNzaW9uSW5kZXgiOjB9XQ==)

<br><br>
> Postman Public Link (You can select 'Settings' environment)<br><br>
[![Run in Postman (You can select 'Settings' environment)](https://run.pstmn.io/button.svg)](https://www.postman.com/beerkayaa/workspace/edurey/collection/14787201-c3f7ccc8-81b6-4a01-9018-1f433370da4e?action=share&creator=14787201)
<br><br>

This project is developing for the Edurey.

Clone project to your local machine:

> Create a database named '**edurey**'

```bash

git clone https://github.com/beerkaya/edurey.git

```

```bash

cd edurey

```
  

Copy the `.env.example` file to `.env`:

```bash

cp .env.example .env

```
> Don't forget configure the database settings


Install composer dependencies:

```bash

composer install

```


Prepare project:

```bash

php artisan prepare:project

```


Run the project:

```bash

php artisan serve

```
