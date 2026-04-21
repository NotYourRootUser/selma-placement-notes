# Open Questions

## Project scope and deliverables

### Question
- What would a strong first deliverable look like for my project?

### Why it matters
- I want to aim at the right version 1 instead of overbuilding too early.

### Where it came from
- Project scope discussion

### Current understanding
- I should learn Symfony, then build my own project rather than working on the real app.

### Status
- Open

### Next action
- Ask Marty what a good first deliverable would look like.

---

### Question
- What is the minimum useful version of the project?

### Why it matters
- I need to know the smallest version that still counts as a solid placement outcome.

### Where it came from
- Project planning / scope clarification

### Current understanding
- The project is my own build and should include a widget.

### Status
- Open

### Next action
- Clarify what the minimum acceptable scope is.

---

### Question
- What kind of gender-based graph should I build first?

### Why it matters
- The widget is expected, so I need to know the best first version to implement.

### Where it came from
- Marty scope discussion

### Current understanding
- A gender-based graph widget is expected, but the exact format is not fully clear yet.

### Status
- Open

### Next action
- Ask what graph type and data view would be most useful first.

---

### Question
- Should the widget use demo/sample data first or be structured like real application data?

### Why it matters
- This affects how I design the controller, data structure, and overall project flow.

### Where it came from
- Project planning

### Current understanding
- The project is my own build, not the real app, but it may reflect a real domain flow.

### Status
- Open

### Next action
- Clarify whether the first version should optimize for realism or learning speed.

---

### Question
- Should the project be mainly a dashboard-style page, or a broader app with a dashboard inside it?

### Why it matters
- This changes the structure, scope, and how I plan the build.

### Where it came from
- Project shaping

### Current understanding
- The expected widget sounds dashboard/reporting-oriented, but the full app shape is still not fully clear.

### Status
- Open

### Next action
- Ask whether the target is a single reporting page or a broader mini-app.

---

### Question
- What should be complete by the midpoint of the placement?

### Why it matters
- I want a realistic checkpoint so I can tell whether I am on track.

### Where it came from
- Placement planning

### Current understanding
- I am in the Symfony ramp-up stage and still clarifying the exact project shape.

### Status
- Open

### Next action
- Define a midpoint checkpoint with Marty or in my own plan.

---

## Architecture and Symfony understanding

### Question
- What exactly is the serializer service, and how would I use it outside a controller helper?

### Why it matters
- I understand the purpose at a high level, but I want to know what the actual service is and how it is used in normal app structure.

### Where it came from
- Symfony learning / Day 2

### Current understanding
- `$this->json()` helps return JSON, but the serializer is the deeper service behind object conversion.

### Status
- Open

### Next action
- Find one simple example of injecting and using the serializer directly.

---

### Question
- How does Symfony decide which concrete class to inject for an interface?

### Why it matters
- I want to understand how autowiring connects type-hints to real implementations.

### Where it came from
- Symfony learning / autowiring

### Current understanding
- Symfony can inject a concrete class such as `Monolog\Logger` when I type-hint `LoggerInterface`.

### Status
- Open

### Next action
- Learn the first-pass mental model for interface-to-implementation resolution.

---

### Question
- What makes a repository different from a general service in a real Symfony app?

### Why it matters
- I want to understand responsibility boundaries more clearly.

### Where it came from
- Symfony learning / `StarshipRepository`

### Current understanding
- A repository seems focused on fetching or preparing data, while a general service seems broader.

### Status
- Open

### Next action
- Compare one repository-style class with one general service-style class.

---

### Question
- When should a class stay a simple model/data object, and when should it become an entity?

### Why it matters
- This affects how I shape my own project cleanly.

### Where it came from
- Symfony learning / model vs entity

### Current understanding
- A model class is app-shaped data, while an entity is database-mapped.

### Status
- Open

### Next action
- Use my own project plan to label which classes would be plain models and which would be entities if a DB existed.

---

### Question
- What Symfony concepts should I treat as first-pass essentials versus second-pass deep dives?

### Why it matters
- I do not want to go too far into internals too early and lose momentum.

### Where it came from
- Symfony learning / framework ramp-up

### Current understanding
- I should know routes, controllers, responses, Twig, services, and autowiring first.

### Status
- Open

### Next action
- Create a small “must know now” vs “learn later” list.

---

### Question
- What does `$this->` mean inside a class?

### Why it matters
- I keep seeing it in controllers and class methods, and I want the mental model to be fully clear.

### Where it came from
- Symfony/PHP class syntax

### Current understanding
- It refers to the current object instance, but I want the idea locked in more clearly.

### Status
- Open

### Next action
- Write one tiny PHP class example showing `$this->property` and `$this->method()`.

---

## Project design and data shape

### Question
- What should the first version of the project actually contain?

### Why it matters
- I need a concrete build target, not just a vague idea of “make a widget.”

### Where it came from
- Project shaping

### Current understanding
- The project likely involves Symfony learning plus a dashboard/reporting-style output with a widget.

### Status
- Open

### Next action
- Define a version 1 feature list.

---

### Question
- What is the core user flow of my project?

### Why it matters
- A project is easier to design if I know what the user sees and does from start to finish.

### Where it came from
- Project shaping / app-flow thinking

### Current understanding
- It may center on viewing a dashboard/widget rather than full CRUD.

### Status
- Open

### Next action
- Write one simple user flow: page load -> data source -> graph/widget output.

---

### Question
- What data fields would the gender-based widget actually need?

### Why it matters
- The data shape determines the controller, model, and graph design.

### Where it came from
- Widget planning

### Current understanding
- At minimum, it likely needs gender categories and associated counts.

### Status
- Open

### Next action
- Draft a sample data structure for the widget.

---

### Question
- Should the first graph be static, dynamic, or filterable?

### Why it matters
- This affects complexity and what counts as a realistic first milestone.

### Where it came from
- Widget planning

### Current understanding
- A static first version may be enough for version 1, but I am not sure.

### Status
- Open

### Next action
- Ask whether interactivity is expected in version 1.

---

### Question
- Should I design the project as a realistic student-management domain example, or keep it more generic?

### Why it matters
- This affects naming, data shape, and how closely the project reflects Selma’s context.

### Where it came from
- Placement alignment

### Current understanding
- The project is my own build, but it may still reflect a school/student reporting context.

### Status
- Open

### Next action
- Clarify how closely the project should mirror the domain.

---

## Placement execution

### Question
- What should I record each week as proof of progress?

### Why it matters
- The coordinator wants strong documentation from Day 1, so I need a consistent evidence pattern.

### Where it came from
- Coordinator guidance

### Current understanding
- I should track meetings, daily logs, project scope, and weekly summaries.

### Status
- Open

### Next action
- Lock a weekly evidence template.

---

### Question
- What would make Marty say the placement is going well by Week 2 or Week 3?

### Why it matters
- I want to optimize for useful behavior early, not just technical learning.

### Where it came from
- Placement performance thinking

### Current understanding
- Learning Symfony, staying organized, and showing initiative seem important.

### Status
- Open

### Next action
- Ask what strong early progress looks like from his perspective.

---

### Question
- What is the final expected output of the placement besides the project itself?

### Why it matters
- I need to know whether the final outcome is mainly a demo, presentation, documentation pack, or something else.

### Where it came from
- Placement planning

### Current understanding
- There will likely be a presentation/handover component, but I want the exact expectation clearer.

### Status
- Open

### Next action
- Confirm final deliverables closer to midpoint.