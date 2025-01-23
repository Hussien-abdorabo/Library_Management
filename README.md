# Library Management System

## Overview
The **Library Management System** is a simple project designed to practice Object-Oriented Programming (OOP) concepts in PHP. The system enables management of books, members, and borrowing operations in a library. It demonstrates the use of OOP features such as classes, objects, inheritance, interfaces, traits, and more.

## Features
- Manage books in the library (add, borrow, return).
- Manage members and their borrowing activities.
- Log actions like book creation, borrowing, and returning.
- Enforce reusable behaviors through interfaces and traits.

## OOP Concepts Covered
1. **Classes and Objects**: Represent entities like `Book`, `Member`, and `Library`.
2. **Constructor and Destructor**: Initialize objects with specific properties.
3. **Access Modifiers**: Use `public`, `protected`, and `private` for encapsulation.
4. **Inheritance**: Extend a base class (`Person`) to specialized classes (`Member`, `Staff`).
5. **Constants**: Define fixed values (e.g., maximum books allowed per member).
6. **Static Methods and Variables**: Track global counters like total books.
7. **Abstract Classes and Interfaces**: Enforce common behavior (e.g., `Borrowable` interface).
8. **Traits**: Reuse shared functionality (e.g., `LoggerTrait` for logging).
9. **Namespaces**: Organize code into logical groups.
10. **Magic Methods**: Use methods like `__toString` to enhance usability.

## Project Structure
```
LibraryManagement/
├── Library/
│   ├── Library.php              # Main class to manage the library
│   ├── Book.php                 # Class to represent a book
├── Users/
│   ├── Person.php               # Abstract base class for all users
│   ├── Member.php               # Class for library members (inherits Person)
│   ├── Staff.php                # Class for library staff (inherits Person)
├── Interfaces/
│   ├── Borrowable.php           # Interface for borrowable items
├── Traits/
│   ├── LoggerTrait.php          # Trait for shared logging functionality
├── index.php                    # Entry point to initialize and test the system
```

## Usage Instructions

### 1. Requirements
- PHP 8.0 or higher.

### 2. Clone the Repository
```bash
git clone <repository-url>
cd LibraryManagement
```

### 3. Run the Project
Use PHP's built-in web server to run the project:
```bash
php -S localhost:8000
```
Access the project in your browser at `http://localhost:8000`.

### 4. Test the System
- Open `index.php` and modify the code to test different operations.
- Example operations include:
  - Creating books.
  - Adding members.
  - Borrowing and returning books.

## Example Output
```text
[LOG]: Book created: 1984 by George Orwell
[LOG]: Book created: The Catcher in the Rye by J.D. Salinger
[LOG]: Member created: Alice (ID: 1)
[LOG]: Book borrowed: 1984
[LOG]: Book borrowed by Alice: Title: 1984, Author: George Orwell, ISBN: 123456789
Book borrowed successfully!
[LOG]: Book returned: 1984
Returned successfully.
```

## Contribution Guidelines
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a pull request.

## License
This project is licensed under the MIT License. You are free to use, modify, and distribute this software as per the terms of the license.

## Contact
For any queries or suggestions, please contact [hussienabdoraboo@gmail.com].

