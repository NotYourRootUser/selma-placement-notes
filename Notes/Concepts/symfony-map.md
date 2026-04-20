# Symfony Map

## Goal
Understand the basic structure of a Symfony application well enough to follow the Selma codebase with confidence.

## What Symfony is
Symfony is a PHP web framework that organizes web applications into clear layers. Instead of putting everything in one file, it separates routing, controllers, services, configuration, templates, and data access so the codebase is easier to read, maintain, and extend.

## Core request flow
Browser request  
-> Route  
-> Controller  
-> Service / business logic  
-> Database if needed  
-> Response / rendered output

## Key parts

### Route
A route maps a URL or path to a controller action.

### Controller
A controller receives the request, decides what should happen, and returns a response.

### Service
A service contains reusable business logic that should stay outside the controller.

### Template / View
A template displays data to the user, usually as HTML.

### Entity
An entity is a PHP class that represents one piece of application data, such as a user, note, or report record.

### Repository
A repository handles loading data for an entity, usually from the database.

### Database
The database stores application data and supports reads and writes.

### Config / Env
Configuration and environment variables control how the app behaves, including database connections, API keys, and environment-specific settings.

## Plain PHP vs Symfony

### Plain PHP
URL -> PHP file -> logic + output

### Symfony
URL -> route -> controller -> service -> response

## Bridge from my PHP projects

### In my plain PHP projects
- `index.php`, `notes-by-status.php`, and `student-view.php` act like simple route targets
- the top PHP logic in each page acts like controller logic
- `functions.php` acts like helper or service-style logic
- the HTML output section acts like a simple view/template
- `StudentNote.php` acts like a domain/model-style class

### In Symfony
- routes point to controllers
- controllers handle the request
- services hold reusable logic
- templates render the response
- entities and repositories structure the data layer more clearly

## Folder / codebase concepts to recognize
- routes
- controllers
- services
- templates
- config
- environment variables
- entities
- repositories

## Simple mental example
User visits `/dashboard`  
-> route matches `/dashboard`  
-> controller runs  
-> controller calls a service  
-> service fetches or prepares data  
-> controller returns a rendered dashboard view

## Practice bridge
These PHP demo files helped simulate Symfony concepts:

- `route-demo.php` = query parameter decides which page is shown
- `controller-demo.php` = route-like check chooses which controller function runs
- `service-demo.php` = controller function calls a service class to generate the response

The student notes projects also helped build the bridge:
- plain PHP student notes summary = procedural PHP flow
- student notes OOP viewer = objects, methods, and request-based output
- next step = understanding how Symfony formalizes those ideas into a framework structure

## What I want to recognize in Selma's codebase
- where routes are defined
- where controllers live
- where business logic lives
- how templates are rendered
- how data gets loaded for widgets or reports
- where repositories or database queries are used
- how config is structured
- how environment variables are handled

## Unknowns / questions
- Are routes defined with attributes or config files?
- Are controllers thin, or do they contain too much logic?
- What services handle the main business logic?
- How are dashboard widgets or reports populated?
- Is Doctrine being used for entities and repositories?
- Where are environment variables loaded from?
- Where does the app bootstrap from?

## 10 terms to remember
1. Route
2. Controller
3. Service
4. Template
5. Entity
6. Repository
7. Config
8. Env
9. Request
10. Response

## One-line anchor
Symfony is a structured way to move from a browser request to organized PHP logic and a final response.