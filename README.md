# Expense Tracker with Monthly Report

A simple **Expense Tracker** application built with **Laravel** that allows users to manage daily expenses and view monthly reports grouped by category. Only authenticated users can access the system.

---

## Features

- User authentication (login/register)
- Add daily expenses with the following fields:
  - **Title**
  - **Amount**
  - **Date**
  - **Category** (Food, Transport, Shopping, Others)
- View all expenses (latest first)
- Monthly report showing total expenses per category and overall total
- (Bonus) Chart visualization of monthly expenses by category using **Chart.js**
- Simple and clean Blade templates for UI

---

## Installation

1. **Clone the repository:**

```bash
git clone https://github.com/anikmondol/Simple-Task
cd Simple-Task



## Install dependencies:

composer install
npm install
npm run dev



## Set up environment variables:

cp .env.example .env


## Generate application key:

php artisan migrate --seed



## The database seeder creates a default admin user:


Email: admin@dev.com
Password: 12345678
Role: admin


## Start the development server:

php artisan serve
Visit http://localhost:8000 to access the application.


Usage


1. Navigate to Add Expense to record daily expenses.

2. View all expenses in the Expense List page (latest first).

3. Check the Monthly Report page for a summary of expenses grouped by category.

4. (Optional) View a chart for visual analysis of monthly expenses.



## Tech Stack

Backend: Laravel 11

Frontend: Blade Templates

Database: MySQL

Charts: Chart.js
