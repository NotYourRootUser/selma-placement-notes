# Project Scope

## Purpose
This file tracks my current understanding of the placement project scope and how it changes over time.

---

## Current scope understanding
- Learn Symfony first
- Use that learning to understand the kind of application flow Selma works with
- Build my **own project/application**, rather than working on the real Selma production app
- Use the project to practice relevant app structure, flow, and technical patterns
- Include a **widget idea as an expected part of the project**, not just an optional extra

## Confidence level
- High
- I understand that this work is for my own build/project, not the real Selma application
- I also understand that the widget is expected as part of that work

## Confirmed understanding
- This is **not** part of the real app
- I am **not** directly building inside the production product
- The work is a placement learning project inspired by the app/domain/context
- A widget is expected as part of the project scope

## Still needs clarification
- What the first concrete deliverable is
- What the minimum expected version 1 scope is
- What kind of widget is most appropriate
- What “done” looks like by the midpoint

---

## Scope breakdown

### Base scope
- Learn enough Symfony to build a small working personal project with relevant app flow
- Include one widget as part of the expected project outcome

### Stretch scope
- Add more polish, stronger structure, or an extra improvement if the base scope is completed early

### Out of scope
- Editing or extending the real Selma production application unless explicitly asked
- Overbuilding beyond what is realistic for the placement timeframe

---

## Scope changes log

### 2026-04-20
#### Initial understanding
- I thought the project might involve learning Symfony and possibly building something closer to their application context.

#### Updated understanding
- The project is my **own build**, not part of the real Selma app.
- The project should include a **widget as an expected part of the build**, not just a possible optional idea.
- The implementation may be inspired by what Selma does, but it is separate from their production system.

#### Confidence
- High

#### What still needs confirmation
- Exact first deliverable
- Expected scope of version 1
- What type of widget is most useful to build first

---

## Questions to clarify
- What would a strong first deliverable look like?
- What is the minimum useful version of the project?
- Which part of the app/domain should I model first?
- What kind of widget is expected?
- What should be complete by the midpoint?

---

### 2026-04-29
#### Widget direction confirmed
- I discussed the possible `Communication Summary` widget idea with Marty.
- Marty confirmed that there is not currently a widget like this.
- Marty said it would be a good idea to do.
- This makes `Communication Summary` the current preferred V1 widget direction.

#### Updated understanding
- The project is still my own Symfony build, not work inside Selma’s production application.
- The widget idea is now more concrete.
- The current V1 direction is to build a customer-facing `Communication Summary` dashboard widget.
- The widget should help education admins understand student message activity and communication issues that need attention.
- The first version should use demo data and focus on showing the dashboard flow clearly.

#### V1 widget focus
- Messages sent
- Delivered messages
- Failed messages
- Pending messages
- Unread replies
- Delivery rate
- Simple status label such as `Good`, `Warning`, or `Needs Attention`
- Action-required items such as failed messages, unread replies, or missing/invalid contact details

#### Confidence
- High
- The general widget direction has now been validated by Marty.

#### What still needs confirmation
- Whether the first version should focus only on SMS or include wider communication such as email
- What exact message statuses should be included
- Whether SMS cost should be included or left as stretch scope
- What the midpoint deliverable should look like

## Current one-line scope summary
- My current understanding is that I should learn Symfony, then build my own relevant Symfony dashboard-style project inspired by Selma’s domain context, with a `Communication Summary` widget as the current preferred V1 feature.