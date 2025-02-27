# GraphQL Example

This project demonstrates a simple implementation of GraphQL using PHP. The application serves as an example of how to set up a GraphQL API to handle basic queries and responses.

---

## Features

- Basic GraphQL setup using PHP.
- Query resolution with a simple `message` field.
- Lightweight and easy-to-understand structure.

---

## Requirements

To run this project, you need:

- **PHP** (v8.0 or later)
- **Composer** (Dependency Manager for PHP)

---

## Setup Instructions

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd <repository-folder>
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Start the PHP development server:**
   ```bash
   php -S localhost:4000
   ```

4. **Test the GraphQL API:**
   Use a GraphQL client (e.g., Postman or GraphiQL) to query the endpoint:
   ```
   http://localhost:4000
   ```

---

## Project Structure

- **`index.php`**: The entry point of the application, containing the GraphQL schema and resolvers.
- **`vendor/`**: Directory created by Composer to manage dependencies.

---

## Example Query

Use the following GraphQL query to test the application:

```graphql
{
  message
}
```

### Response:

```json
{
  "data": {
    "message": "Hello, GraphQL!"
  }
}
```

---

## How It Works

1. **Schema Definition:**
   - The GraphQL schema is defined directly in the `index.php` file with a single field, `message`.

2. **Resolver Function:**
   - The resolver handles the `message` field and returns a static response, "Hello, GraphQL!".

3. **Execution:**
   - The server processes incoming queries and responds with the appropriate data in JSON format.

---

## Dependencies

- [webonyx/graphql-php](https://github.com/webonyx/graphql-php): A PHP implementation of GraphQL.

---

## Troubleshooting

1. **Missing Dependencies:** Ensure you run `composer install` to install the required dependencies.
2. **Port Conflict:** If port `4000` is already in use, modify the command in step 3 of the setup instructions.
3. **No Query Provided Error:** Make sure to send a valid GraphQL query to the server.

---

## License

This project is licensed under the MIT License. See the LICENSE file for details.

---

## Acknowledgments

Special thanks to the contributors of `webonyx/graphql-php` for providing an excellent GraphQL library for PHP.

