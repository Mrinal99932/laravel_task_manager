# laravel_task_manager

Task Manager Application
This is a Task Manager application built using Laravel.

## Setup Instructions

1. Clone the repository:

   ```bash
   git clone https://github.com/Mrinal9932/laravel_task-manager.git
   
2. Navigate to the project directory:
    cd laravel_task_manager

3. Specify your database name in the '.env' file in 'DB_DATABASE' section.

4. Run migrations and seed the database:
     Add a data table in your database named 'tasks' with fields of id(A.I),title,description,created_at and updated_at .
   
5. Start the development server:    run the comand 'php artisan serve' .

6. Open your browser and visit http://localhost:8000 to view the application.


 ## About project
 1. Project Structure:  The project follows the standard Laravel MVC (Model-View-Controller) architecture for organizing code.
                        Separate controllers are used for web and API routes to maintain separation of concerns.
    
 2. Frontend Design:    The frontend is designed using HTML, CSS, and JavaScript for simplicity and ease of understanding.
                        The design is kept clean and minimalistic to focus on functionality rather than aesthetics.

 3. Backend Functionality:  CRUD (Create, Read, Update, Delete) operations are implemented using Laravel's Eloquent ORM for database interaction.
                            Validation is applied at the controller level to ensure data integrity and security.

 4. API Development:     RESTful API endpoints are created for managing tasks, allowing external clients to interact with the application.
                         API routes are organized in a separate file (api.php) for clarity and maintainability.

 5. Database Schema:    The database schema includes a single table for storing tasks, with columns for ID, title, and description.

 6. User Interface      The user interface is designed to be intuitive and user-friendly, with clear navigation and feedback messages for successful operations.

 7. Additional Features:   Sorting functionality is implemented for tasks by date, allowing users to view tasks in ascending or descending order based on creation date.
                           A footer section is added to ensure that it always remains at the bottom of the page, providing consistent layout across different screen sizes.


    These design choices aim to create a robust and user-friendly task management application while maintaining simplicity and clarity in code and interface.

    Note: I focus mainly on the backend code and logics.
 
