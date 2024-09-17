# Student Manager

Student Manager is a PHP-based web application that allows administrators to manage student information. It features a secure login system and provides functionality to add, edit, delete, and view student records.

![Student Manager Screenshot](/Demopics/homedemo.png)

## Table of Contents

- [Features](#features)
- [Demo](#demo)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- Secure admin login system
- Add new students
- Edit existing student information
- Delete student records
- View all student records
- Read-only access for non-authenticated users

## Demo

![Student Manager Screenshot](/Demopics/homedemo.png)
![Student Manager Screenshot](/Demopics/addstudentdemo.png)

![Student Manager Screenshot](/Demopics/editstudentdemo.png)
![Student Manager Screenshot](/Demopics/searchstudentdemo.png)

### A demo is better then thousand word

You can view a live demo of the application at [https://studentmanager.free.nf/?i=1](https://studentmanager.free.nf/?i=1)

## Installation

To set up Student Manager on your local machine, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/yeasinarafat1/S_Manager.git
   ```

2. Move the project files to your web server's document root (e.g., `htdocs` for XAMPP).

3. Configure your web server to serve the application.

4. Set up the database (see [Database Setup](#database-setup) section).

5. Update the database connection settings in the PHP files to match your local environment.

## Database Setup

### Create Database

#### Go to your php my admin dashboard Create a new database

![Student Manager Screenshot](/Demopics/dbcreate.png)

The application requires two MySQL tables: `admin` and `student`.

#### To run mysql query Click on your newly created databae then click on new then create on sql then paste the sql query and click on go

![Student Manager Screenshot](/Demopics/sqlquery.png)

### Admin Table

Create the `admin` table with the following structure:

```sql
CREATE TABLE admin (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);
```

Insert at least one admin user to access the system:

```sql
INSERT INTO admin (username, password) VALUES ('admin', 'your_hashed_password');
```

Note: Make sure to use a secure method to hash the password before inserting it into the database.

### Student Table

Create the `student` table with the following structure:

```sql
CREATE TABLE student (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  roll INT(11) NOT NULL,
  fullName VARCHAR(500) NOT NULL,
  semester VARCHAR(500) NOT NULL,
  shift VARCHAR(500) NOT NULL,
  phoneNumber VARCHAR(100) NOT NULL
);
```

## Usage

1. Access the application through your web browser.
2. Log in using your admin credentials.
3. Once logged in, you can add, edit, or delete student records.
4. Non-authenticated users can only view the list of students without making any changes.

## Contributing

Contributions to improve Student Manager are welcome. Please follow these steps to contribute:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/AmazingFeature`)
3. Make your changes
4. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
5. Push to the branch (`git push origin feature/AmazingFeature`)
6. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

For any additional questions or support, please open an issue in the GitHub repository.
