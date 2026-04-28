# Communication Summary Widget - Project Scope

## Placement Context

I am currently completing a 10-week placement with Selma.

My current understanding is that I am not working directly in Selma’s production codebase. Instead, my placement work is focused on learning Symfony through structured practice, understanding application architecture, and building my own relevant Symfony project or prototype.

This project is based on my current understanding of the placement direction and may change after feedback from Selma staff or my mentor.

---

## Widget Idea

The proposed widget is called:

# Communication Summary

The widget is intended to be a customer-facing dashboard widget for education administrators using a Selma-style student management system.

It is designed to help admins quickly understand student communication activity and identify issues that may need attention.

---

## Problem It Solves

Education providers often need to send important messages to students, such as:

- Class reminders
- Attendance notices
- Payment reminders
- Enrolment updates
- Document requests
- General support messages

If messages fail, remain pending, or receive replies that are not followed up, students may miss important information.

This widget helps admins answer:

> Are our student messages going out properly, and what needs attention today?

---

## Target User

The target user is an education admin, student support staff member, or programme coordinator using a dashboard inside a student management system.

This widget is not mainly designed for developers or internal technical monitoring.

---

## V1 Goal

The goal of Version 1 is to build a simple Symfony dashboard prototype that displays a Communication Summary widget using demo data.

The focus is to prove that I understand:

- Symfony routes
- Controllers
- Services
- Twig rendering
- Basic data preparation
- Dashboard-style UI structure
- Clean project documentation

---

## V1 Features

The first version of the widget should show:

| Feature | Description |
|---|---|
| Total messages sent | Number of messages sent today |
| Delivered messages | Number of successfully delivered messages |
| Failed messages | Number of messages that failed |
| Pending messages | Number of messages still waiting |
| Unread replies | Student replies that need staff attention |
| Delivery rate | Percentage of messages successfully delivered |
| Status label | Good, Warning, or Needs Attention |
| Action required list | Short list of issues the admin should check |

---

## Example Widget Content

`Communication Summary`

`Today`

`Sent: 248`  
`Delivered: 231`  
`Failed: 12`  
`Pending: 5`  
`Unread replies: 4`

`Delivery rate: 93%`  
`Status: Needs Attention`

`Action required:`  
`- Review failed messages`  
`- Respond to unread student replies`  
`- Check missing or invalid phone numbers`

---

## Base Scope

For the base version, the widget will:

- Use demo data first
- Display one dashboard card
- Show message status counts
- Calculate delivery rate
- Show a simple status label
- Show a short action-required list
- Render through a Symfony controller and Twig template
- Use a service class to prepare the widget data

---

## Out of Scope for V1

The first version will not include:

- Real Selma production data
- Direct integration with Selma’s actual codebase
- Real SMS provider integration
- Login/authentication
- Complex charts
- Database persistence
- Advanced filtering
- Export features
- Notification automation

These may be considered later as stretch features.

---

## Stretch Scope

Possible future improvements include:

| Stretch Feature | Description |
|---|---|
| Date filter | View today, this week, or this month |
| Message type filter | Separate attendance, payment, enrolment, and general messages |
| SMS/email split | Show different communication channels |
| Failure reason breakdown | Show invalid number, opt-out, carrier failure, etc. |
| Cost estimate | Estimate SMS spend and failed-message cost |
| Database-backed records | Store demo message records in a database |
| Detail page | Click failed messages to view affected students |
| Trend chart | Show communication performance over time |

---

## Proposed Symfony Structure

`src/`  
`  Controller/`  
`    DashboardController.php`  
`  Service/`  
`    CommunicationSummaryService.php`

`templates/`  
`  dashboard/`  
`    index.html.twig`

Possible later structure:

`src/`  
`  Entity/`  
`    MessageRecord.php`  
`  Repository/`  
`    MessageRecordRepository.php`  
`  Service/`  
`    CommunicationSummaryService.php`  
`  Controller/`  
`    DashboardController.php`

`templates/`  
`  dashboard/`  
`    index.html.twig`

---

## Data Flow

`Dashboard route`  
`→ DashboardController`  
`→ CommunicationSummaryService`  
`→ Prepared widget data`  
`→ Twig template`  
`→ Dashboard card shown to user`

---

## Why This Widget Makes Sense

This widget fits naturally beside other dashboard widgets such as:

- Calendar
- Students Summary
- Event Log
- System Status
- Marking
- Grade Scheme

It adds a communication-focused summary that helps education admins quickly see whether student messages are being delivered and whether anything needs follow-up.

---

## Current Project Anchor

I am building a Symfony dashboard prototype with a customer-facing Communication Summary widget that shows student message activity, delivery status, unread replies, and communication issues needing attention using demo data first.

---

## Questions to Confirm

- Should this widget focus only on SMS, or include email and SMS together?
- Should the first version show today only, or allow date ranges?
- Should cost estimate be included in V1 or saved for stretch scope?
- What message statuses are most useful to show?
- Would admins prefer a summary card, a chart, or an action list?
- What would make this widget useful enough for a first placement deliverable?

---

## Success Criteria

The V1 prototype is successful if:

- The dashboard page loads correctly
- The Communication Summary widget displays clearly
- The widget uses structured demo data
- The delivery rate is calculated correctly
- The action-required section is easy to understand
- The code is separated into controller, service, and Twig view
- The README explains the purpose, scope, and future improvements