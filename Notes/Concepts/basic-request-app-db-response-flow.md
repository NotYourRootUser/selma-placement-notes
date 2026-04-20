# Basic Request → App → DB → Response Flow

This is the core backend flow in a PHP web application.

A browser sends an HTTP request to the server. The web server passes the request into the PHP application. PHP handles the application logic and decides what to do next.

If the request does not need stored data, PHP can build the response directly.

If the request needs stored data, PHP queries the database, receives the data back, and then builds the response.

The final response is sent back to the browser. This response is usually HTML or JSON.

## Core pattern

`Request -> App -> Database if needed -> Response`

## In simple terms

- **Request** = the browser asks for something
- **App** = PHP processes the request
- **Database** = MySQL stores or returns data if needed
- **Response** = PHP sends HTML or JSON back to the browser

## Key points

- The browser talks to the app, not directly to the database
- PHP is the middle layer that handles the logic
- MySQL is optional for some requests
- The browser only receives the final response

## How this connects to my other notes

- `where-php-runs.md` explains where PHP executes
- `apache-request-handling.md` explains how Apache handles static files vs PHP files
- `where-mysql-fits.md` explains how PHP uses MySQL when needed

## Key takeaway

A basic PHP app flow is: the browser sends a request, PHP processes it, MySQL is used if needed, and PHP returns the final response to the browser.