# Where PHP Runs

![Where PHP Runs](../Diagrams/%20where-php-runs-diagram.png)

This diagram shows how a PHP web request works. The browser sends an HTTP request to the server. The web server (Apache or Nginx) receives that request and passes it to PHP. PHP runs on the server, not in the browser. PHP may talk to a MySQL database if needed, then creates an HTML or JSON response and sends it back to the browser.

## Key points
- The browser is the client
- Apache/Nginx is the web server
- PHP executes on the server
- The database is optional
- The browser only receives the final response

## Key takeaway
PHP runs on the server, and the browser only sees the output.
