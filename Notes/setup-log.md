# Setup Log

## Goal
Track Selma prep environment setup so I know what is installed, what works, what failed, and what still needs testing.

## Core tools status

### Git
- Status: Installed
- Version: 2.43.0
- Check: `git --version`
- Notes: Works in terminal

### VS Code
- Status: Installed
- Check: `code --version`
- Notes: Available in terminal

### PHP
- Status: Installed
- Version: 8.3.6
- Check: `php --version`
- Notes: Available in terminal

### Composer
- Status: Installed
- Version: 2.9.5
- Check: `composer --version`
- Notes: Installed globally and available in terminal

### MySQL
- Status: Installed
- Version: 8.0.45
- Notes: Service running

### Apache
- Status: Installed
- Version: 2.4.58
- Notes: Installed and running

## Local PHP testing

### PHP built-in server
- Command used: `php -S localhost:8000`
- Result: PHP development server started successfully
- Learned: PHP files can be served locally without Apache for quick practice

### Routing / file behavior
- Confirmed: `index.php` loads by default at `/`
- Confirmed: other PHP files must be visited by filename in the URL
- Example: `/route-demo.php?page=home`

### Practice files created
- `route-demo.php`
- `controller-demo.php`
- `service-demo.php`

### What each file proved
- `route-demo.php` = request/query parameter can control page flow
- `controller-demo.php` = route-like logic can choose which controller function runs
- `service-demo.php` = controller can call a service to generate a response

## Problems / blockers

### Problem 1 - Composer global command
- Issue: Composer was not available as a global terminal command
- Cause: Composer existed as `composer.phar` but was not on the global path
- Fix: Moved Composer to `/usr/local/bin/composer` and made it executable
- Result: `composer --version` now works globally

### Problem 2 - controller-demo route mismatch
- Issue: Default page value did not match conditional checks
- Cause: Default used lowercase `home` but condition checked `Home`
- Fix: Change conditions to lowercase for consistency
- Result: controller-demo route consistent

## What currently works
- Git works in terminal
- VS Code works in terminal
- PHP works in terminal
- Composer works globally
- MySQL service is running
- Apache is installed and running
- PHP built-in server works for local practice
- Basic PHP demo files run in browser

## What still needs checking
- Apache -> PHP integration with a simple local page
- Whether MySQL is reachable from a PHP script
- Whether required PHP extensions for Symfony are installed
- Whether Composer can create and run a Symfony project cleanly

## Next actions
1. Retest `controller-demo.php` after lowercase fix
2. Run one combined PHP demo for route -> controller -> service -> response
3. Check PHP modules needed for Symfony
4. Test Composer with a basic Symfony install later