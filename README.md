Laravel Module 16 Assignment – Personal Portfolio
This is the submission for Module 16 Assignment of the Laravel course. The project includes the following key tasks:

Blade template conversion using the Personal Bootstrap Template
Database design implemented using Laravel migrations
A working contact form with form validation, session-based success message, logging, and redirection
Clean codebase with unnecessary files removed
🔧 Features Implemented
1. 🧩 Template to Blade Conversion
Converted the given HTML template into Laravel Blade components.
Created layout file with @yield directives.
Separated header, footer, and other reusable parts into partials.
2. 🗃️ Database Migration
Database structure created based on the given diagram: Database Diagram https://drive.google.com/file/d/1TJQwga-bTXKNaEn-o-WDEKhJkCyWZmkg/view
Used Laravel migration system to implement models and relationships.
3. ✉️ Form Submission & Response
A Contact Form was added to the project.
Data is submitted via POST, validated, and saved in the database.
A session-based success message is shown.
Submitted data is logged using Laravel's logging system.
User is redirected to a confirmation page displaying submitted data.
📁 Project Structure
resources/views/layouts: Blade layout file
resources/views/components: Header and Footer partials
routes/web.php: Web routes
app/Http/Controllers/ContactController.php: Form submission logic
database/migrations: All database migration files
public/: Public assets from the template
project.sql: SQL dump file for the database
🎥 Project Presentation Video
Watch the video demonstration of this project here:
🔗 https://drive.google.com/file/d/1qX3F5tfLPBtmGJg3HDq13w4M4PflSRmr/view

Database Diagram image image


🧠 How to Use
Clone the repository
Run composer install
Configure your .env file and run php artisan migrate
Import the project.sql file if necessary
Run the server using php artisan serve
Visit the site in your browser
📌 Important Notes
Unnecessary files like node_modules, vendor, .vscode, etc., are excluded.
All functionalities have been tested and verified.
Code has been cleaned and unused/commented code removed.
📝 License
This project is open-source and built for educational purposes as part of Laravel learning.
