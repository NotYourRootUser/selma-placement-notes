# Setup Log

## Goal
Track setup progress for Selma prep so I know what works, what broke, and what to fix.

## Tools to check/install
- PHP
- Composer
- MySQL
- Apache or local dev stack
- Git
- VS Code

## Environment checks
### Git
- Status: **Installed**
- Version: **2.43.0**
- Notes: **Works in terminal**

### VS Code
- Status: **Installed**
- Notes: **`code --version` works in terminal**

### PHP
- Status: **Installed**
- Version: **8.3.6**
- Command used: `php --version`
- Notes: **Available in terminal**

### Composer
- Status: **Not installed**
- Version:
- Command used: `composer --version`
- Notes: **Needs installation**

### MySQL
- Status: **Installed**
- Version: **8.0.45**
- Notes: **Service running**

### Apache / local stack
- Status: **Installed**
- Version: **2.4.58**
- Notes: **Apache is installed and running**

## Problems / blockers
### Problem 1
- Issue: Composer is not installed
- Cause: `composer --version` did not return a version
- Fix tried: Checked whether Composer exists in terminal
- Result: Confirmed Composer still needs to be installed

### Problem 2
- Issue: None yet
- Cause:
- Fix tried:
- Result:

## What currently works
- Git works in terminal
- VS Code works in terminal
- PHP is installed and available in terminal
- MySQL is installed and the service is running
- Apache is installed and running

## What still needs checking
- Composer installation
- Whether PHP, Apache, and MySQL work together in a simple local test
- Whether a basic PHP page can run through Apache locally

## Next action
- Install Composer
- Run a simple PHP local test
- Confirm local browser → Apache → PHP flow works