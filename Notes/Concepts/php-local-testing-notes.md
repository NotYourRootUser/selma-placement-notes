# PHP Local Testing Notes

## PHP built-in server
- Command used: `php -S localhost:8000`
- Result: PHP development server started successfully
- Learned: PHP files can be served locally without Apache for quick practice

## Routing / file behavior
- Confirmed: `index.php` loads by default at `/`
- Confirmed: other PHP files must be visited by filename in the URL
- Example: `/route-demo.php?page=home`

### Problem 1 - controller-demo route mismatch
- Issue: Default page value did not match conditional checks
- Cause: Default used lowercase `home` but condition checked `Home`
- Fix: Changed conditions to lowercase for consistency
- Result: Route logic is now consistent

## Practice files created
- `route-demo.php`
- `controller-demo.php`
- `service-demo.php`

## What each file proved
- `route-demo.php` = request/query parameter can control page flow
- `controller-demo.php` = route-like logic can choose which controller function runs
- `service-demo.php` = controller can call a service to generate a response

## Next practical tests
- run one combined route -> controller -> service -> response demo
- compare PHP built-in server vs Apache later
- add one small example with query parameters and conditional output