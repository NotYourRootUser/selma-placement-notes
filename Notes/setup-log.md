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
- Notes: Available in terminal, working with Apache, and confirmed through `phpinfo()`

### Composer
- Status: Installed
- Version: 2.9.5
- Check: `composer --version`
- Notes: Installed globally, available in terminal, and confirmed working with package install and autoloading

### MySQL
- Status: Installed
- Version: 8.0.45
- Check: `mysql --version`
- Notes: Service running and confirmed reachable from PHP via PDO using a dedicated local test user

### Apache
- Status: Installed
- Version: 2.4.58
- Check: `apache2 -v`
- Notes: Installed, running, and confirmed serving PHP files from localhost

### Symfony
- Status: Installed and tested
- Version: 7.4.8
- Check: `php bin/console`, `php bin/console about`
- Notes: Symfony skeleton project created successfully, local server runs, welcome page loads, and console commands work

## Problems / blockers

### Problem 1 - Composer global command
- Issue: Composer was not available as a global terminal command
- Cause: Composer existed as `composer.phar` but was not on the global path
- Fix: Moved Composer to `/usr/local/bin/composer` and made it executable
- Result: `composer --version` now works globally

### Problem 2 - MySQL root login from PHP
- Issue: PHP database test failed when trying to connect as MySQL `root` with no password
- Cause: MySQL authentication for `root` was not set up for direct web app login
- Fix: Created a dedicated local MySQL test user and updated the PHP connection script to use that account
- Result: PHP successfully connected to MySQL through PDO

### Problem 3 - Missing PHP extensions for Symfony
- Issue: Initial PHP module check showed important Symfony-related extensions were missing
- Cause: Base PHP install did not include all required/common extensions
- Fix: Installed missing extensions including `xml`, `SimpleXML`, `mbstring`, `curl`, `intl`, `zip`, and MySQL support
- Result: Required Symfony-related modules are now available

## What currently works
- Git works in terminal
- VS Code works in terminal
- PHP works in terminal
- Apache serves PHP locally
- Composer works globally
- Composer can install packages
- Composer autoloading works
- MySQL service is running
- PHP can connect to MySQL through PDO
- Required PHP extensions for Symfony are installed
- Symfony skeleton project installs successfully
- Symfony local server runs
- Symfony console commands work

## What was tested

### 1. Apache -> PHP integration
- Created a simple `test.php` page in `/var/www/html`
- Confirmed the page loaded through `http://localhost/test.php`
- Verified PHP execution with `phpinfo()`

### 2. PHP extensions for Symfony
- Checked installed modules with `php -m`
- Installed missing extensions
- Verified required modules including:
  - `curl`
  - `intl`
  - `mbstring`
  - `mysqli`
  - `pdo_mysql`
  - `SimpleXML`
  - `xml`
  - `xmlreader`
  - `xmlwriter`
  - `zip`

### 3. MySQL from a PHP script
- Created a `db-test.php` file
- Initial root login failed due to MySQL authentication
- Created a dedicated local test user
- Confirmed successful PHP -> MySQL connection

### 4. Composer package test
- Confirmed Composer version
- Created a small test project in `~/composer-test`
- Installed `symfony/var-dumper`
- Verified Composer autoloading by running `php test.php`

### 5. Basic Symfony install
- Created a Symfony skeleton project with Composer
- Ran the local Symfony server
- Confirmed the Symfony welcome page loaded at `http://127.0.0.1:8000`
- Confirmed `php bin/console` works
- Confirmed `php bin/console about` works

## What still needs checking
- Create a basic Symfony route
- Create a basic Symfony controller
- Return a simple response from controller to browser
- Optionally test Twig templating
- Optionally test Symfony database configuration later

## Next actions
1. Create one basic Symfony route
2. Connect it to one controller
3. Return a simple text or HTML response
4. Document the Symfony request flow in notes
5. Optionally test Twig next