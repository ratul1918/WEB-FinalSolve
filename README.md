# PHP Exam Solutions

## Fall Semester

### Question 2 — Pizza Party Calculator
**Files:** `fall/phpFall/index.html` → `fall/phpFall/Qtwo.php`

An HTML form that calculates pizza logistics for a party. The user inputs:
- Number of students
- Slices each student wants
- Slices per pizza

The PHP script computes:
- **Total pizzas** needed (rounded up)
- **Leftover slices**
- **Wasted money** (at 1050 BDT per pizza)

---

### Question 3 — Student Database (MySQL)
**File:** `fall/Qthree.php`  
**Database:** `uiuweb_final` | **Table:** `student_final`

Performs 4 operations:
1. **Count students per Letter Grade** — Groups and displays students by `LetterGrade`.
2. **Update grades to 'C'** — Sets `LetterGrade` to `'C'` for students with `Grade < 75` (excluding those already at `'D'`).
3. **Bonus points** — Adds 5 points to students with `Grade > 80`, capped at 90.
4. **Students per course** — Lists courses ranked by student count (most popular first).

---

## Spring Semester

### Question 2 — UIU Tech Fest Venue Calculator
**Files:** `spring/phpSpring/index.html` → `spring/phpSpring/code.php`

An HTML form that calculates venue requirements for a tech fest. The user inputs:
- Number of attendees
- Cost per person (BDT)
- Venue capacity

The PHP script computes:
- **Total venues** needed (rounded up)
- **Empty seats** across all venues
- **Wasted money** from unused seats

---

### Question 3 — Employee Database (MySQL)
**File:** `spring/Qthree.php`  
**Database:** `uiutcch_final` | **Table:** `employee_final`

Performs 4 operations:
1. **Total employees per Performance Rating** — Groups and displays employees by `PerformanceRating`.
2. **Update rating to 'C'** — Sets `PerformanceRating` to `'C'` for employees with `Salary < 40,000` (excluding those already at `'D'`).
3. **Salary increment** — Adds 5,000 to employees with `Salary < 50,000`, capped at 60,000.
4. **Employees per department** — Lists departments ranked by employee count (most first).

---

## Summer Semester

### Question 2 — Movie Night Screen Calculator
**Files:** `summer/phpSummer/index.html` → `summer/phpSummer/ans.php`

An HTML form that calculates screen requirements for a movie night. The user inputs:
- Total number of attendees
- Seating capacity per screen
- Ticket price per seat

The PHP script computes:
- **Total screens** needed (rounded up)
- **Empty seats** across all screens
- **Wasted money** from unused seats

---

### Question 4 — Sales Database (MySQL)
**File:** `summer/Qfour.php`  
**Database:** `sundarban` | **Table:** `sales_data`

Performs 4 operations:
1. **Total revenue per category** — Groups and displays total `Revenue` by `Catagoryname`.
2. **Mark low performers** — Sets `Catagoryname` to `'LOW Performing'` for products with `Revenue < 40,000`.
3. **Revenue bonus** — Adds a 10% bonus to products with `Revenue > 70,000`.
4. **Seller status** — Classifies each product as **Top Seller** or **Regular Seller** based on whether its revenue exceeds the average revenue of its category (using a correlated subquery).

---

## Tech Stack
- **Frontend:** HTML
- **Backend:** PHP
- **Database:** MySQL (via MySQLi)
- **Server:** XAMPP (localhost)
