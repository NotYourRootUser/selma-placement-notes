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
- Check: `mysql --version`
- Notes: Service running

### Apache
- Status: Installed
- Version: 2.4.58
- Check: `apache2 -v`
- Notes: Installed and running

## Problems / blockers

### Problem 1 - Composer global command
- Issue: Composer was not available as a global terminal command
- Cause: Composer existed as `composer.phar` but was not on the global path
- Fix: Moved Composer to `/usr/local/bin/composer` and made it executable
- Result: `composer --version` now works globally

## What currently works
- Git works in terminal
- VS Code works in terminal
- PHP works in terminal
- Composer works globally
- MySQL service is running
- Apache is installed and running

## What still needs checking
- Apache -> PHP integration with a simple local page
- Whether MySQL is reachable from a PHP script
- Whether required PHP extensions for Symfony are installed
- Whether Composer can create and run a Symfony project cleanly

## Next actions
1. Test Apache -> PHP with a simple local page
2. Check PHP modules needed for Symfony
3. Test MySQL from a PHP script
4. Test Composer with a basic Symfony install later