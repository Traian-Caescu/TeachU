# TeachU

TeachU is an advanced web application built to facilitate remote learning for both teachers and students. It encompasses a comprehensive set of features aimed at creating a seamless educational experience. The platform includes dedicated modules for different subjects, a dynamic quiz system, and robust user authentication for staff and students.

## Features

### User Authentication
- **Staff Login and Registration**: Secure authentication for staff members to manage educational content and resources.
- **Student Login and Registration**: Dedicated student accounts for accessing learning materials and quizzes.

### Subject Modules
- **Mathematics**
- **English**
- **Computing**

Each module provides a range of resources tailored to the specific subject, ensuring a rich learning environment.

### Interactive Quizzes
- **General Knowledge**
- **Mathematics**
- **English**
- **Computing**

Quizzes are dynamically generated and provide immediate feedback, enhancing the learning process.

### Content Management
- **Resource Management**: Easy addition and management of educational materials.
- **Team Information**: A section dedicated to displaying team members and their roles.

### Responsive Design
- Ensures accessibility and usability across various devices and screen sizes using Bootstrap.

### Database Interaction
- Efficient handling of user data and educational resources through a MySQL backend.

## Technologies Used

### Frontend
- **HTML5**
- **CSS3**
- **JavaScript**
- **jQuery**
- **Bootstrap 3.3.7**

### Backend
- **PHP**: Server-side scripting to handle business logic.
- **MySQL**: Relational database management for storing user data and resources.

## Installation

### Prerequisites
- **Local Server**: XAMPP, WAMP, or any other PHP-enabled server.
- **MySQL Database**: Set up a MySQL database named `labwork`.

### Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/TeachU.git
   
2. **Navigate to the Project Directory**

   ```bash
   cd TeachU

3. **Database Setup**

Create a MySQL database named labwork.
Import the labwork.sql file located in the project root to set up necessary tables.
   ```sql
    mysql -u yourusername -p labwork < labwork.sql

4. **Configure Database Connection**

Update connect.php with your database credentials.
   ```php
   $servername = "your_server_name";
   $username = "your_database_username";
   $password = "your_database_password";
   $dbname = "labwork";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }

5. **Run the Application**

Place the project directory in the htdocs folder of your local server (for XAMPP, this is usually C:/xampp/htdocs/).
Start the Apache and MySQL services from the XAMPP control panel.
Open a web browser and navigate to http://localhost/TeachU.

**Usage**
*Staff*
Register and log in to manage subjects, quizzes, and student resources.
Add or update educational content and monitor student progress through quizzes.
*Students*
Register and log in to access learning materials and participate in quizzes.
View quiz results and track learning progress.
*Contributing*
Contributions are welcome! Please fork the repository and submit a pull request with your changes.
