# PHP-projects

# Student Grade Calculator

A simple yet powerful web application for teachers to calculate student grades and performance metrics. Built with PHP, HTML, and CSS.
[![Laravel](https://github.com/Samukelo-Nkosi/PHP-projects/actions/workflows/laravel.yml/badge.svg)](https://github.com/Samukelo-Nkosi/PHP-projects/actions/workflows/laravel.yml)

## Overview

This project demonstrates fundamental programming concepts including:

- **Variables & Data Types** - Storing student information
- **Expressions & Calculations** - Computing totals and averages
- **Conditional Statements** - Pass/Fail logic
- **Arrays & Loops** - Displaying subject scores

Perfect for educational purposes and learning full-stack web development!

---

## Features

✅ **Student Name Input** - Enter any student's name  
✅ **Score Input** - Input scores for 3 subjects (0-100)  
✅ **Total Calculation** - Automatic sum of all scores  
✅ **Average Calculation** - Mean score computation  
✅ **Pass/Fail Status** - Automatic evaluation (≥50 = Pass)  
✅ **Subject Score Display** - Formatted table with all subject scores  
✅ **Responsive Design** - Works on desktop and mobile devices  
✅ **Form Validation** - Input range validation

---

## Project Structure

index.php
├── Back-End (PHP)
│ ├── Form submission handling
│ ├── Input validation
│ ├── Calculations
│ ├── Business logic
│ └── Dynamic HTML generation
│
└── Front-End (HTML + CSS)
├── User interface
├── Input form
├── Results display
└── Styling & layout

---

## Getting Started

### Prerequisites

- **XAMPP** (Apache + PHP + MySQL)
- **VS Code** (or any code editor)
- **Web Browser** (Chrome, Firefox, Safari, Edge, etc.)

### Installation

#### 1. **Install XAMPP**

- Download from [https://www.apachefriends.org/](https://www.apachefriends.org/)
- Install with default settings

#### 2. **Create Project Folder**

- Navigate to XAMPP htdocs directory:
  - **Windows:** `C:\xampp\htdocs`
  - **Mac:** `/Applications/XAMPP/htdocs`
  - **Linux:** `/opt/lampp/htdocs`
- Create folder: `student-grade-calculator`

#### 3. **Add Files**

- Copy `index.php` to the project folder

#### 4. **Start XAMPP**

- Open XAMPP Control Panel
- Click **Start** next to **Apache**
- Verify green checkmark appears

#### 5. **Open in Browser**

- Navigate to: `http://localhost/student-grade-calculator/`
- Or: `http://127.0.0.1/student-grade-calculator/`

#### 6. **Open in VS Code**

- Launch VS Code
- Go to **File → Open Folder**
- Select: `C:\xampp\htdocs\student-grade-calculator`
- Click **Select Folder**

---

## How to Use

1. **Load the Application**

- Open your browser to `http://localhost/student-grade-calculator/`
- You'll see the grade calculator form

2. **Enter Student Information**

- **Student Name:** Type the student's name
- **Mathematics Score:** Enter a value between 0-100
- **Science Score:** Enter a value between 0-100
- **English Score:** Enter a value between 0-100

3. **Submit Form**

- Click the **"Calculate Grades"** button

4. **View Results**

- Total Score (out of 300)
- Average Score
- Pass/Fail Status
- Individual Subject Scores in a formatted table

---

## Code Breakdown

### Question 1: Expressions & Calculations

```php
// Calculate total score
$total = $mathScore + $scienceScore + $englishScore;

// Calculate average
$average = $total / 3;

```

// Determine pass or fail
if ($average >= 50) {
$result = "Pass";
} else {
$result = "Fail";
}

```
// Create arrays
$subjectNames = array("Mathematics", "Science", "English");
$scores = array($mathScore, $scienceScore, $englishScore);

// Loop and display
for ($i = 0; $i < 3; $i++) {
    echo $subjectNames[$i] . ": " . $scores[$i];
}

```

## Testing

- Test Case 1: All High Scores
  Input: Math=80, Science=90, English=70
  Expected: Total=240, Average=80.00, Status=Pass ✓

- Test Case 2: Failing Scores
  Input: Math=40, Science=35, English=50
  Expected: Total=125, Average=41.67, Status=Fail ✓

- Test Case 3: Boundary Test
  Input: Math=50, Science=50, English=50
  Expected: Total=150, Average=50.00, Status=Pass ✓

## Features Explained

Front-End Components

- HTML Form - User input interface
- CSS Styling - Professional, clean design
- Responsive Layout - Mobile-friendly
- Results Display - Dynamic content rendering
- Back-End Components
- PHP Processing - Server-side logic
- Form Validation - Input security with htmlspecialchars()
- Calculations - Total and average computation
- Conditional Logic - Pass/Fail determination
- Loop Processing - Array iteration for score display

## Samukelo Nkosi

Created for learning PHP and web development fundamentals.

Last Updated: August 24, 2026
