#  Library Management System (PHP OOP)

This project is a simple **Library Management System** built using **PHP OOP principles**, following **PSR-4 autoloading** standards.  
The focus is on demonstrating **Object-Oriented Programming** concepts rather than UI/UX design.  
The front-end is minimal (HTML forms + tables) and used only for data input and display.

---

## Features

- **PSR-4 Autoloading** using Composer
- **Encapsulation** for sensitive data
- **Polymorphism** via a `NotificationInterface` (Email implementation provided)
- **Traits** for reusable features:
  - `LoggerTrait` for logging actions
  - `DateHelperTrait` for date calculations
- **Multiple user roles**:
  - `Member` – can borrow books
  - `Librarian` – can add/remove books
- **Book search** by title or author
- **Late fee calculation** (extra feature)
- Logging of all key actions

