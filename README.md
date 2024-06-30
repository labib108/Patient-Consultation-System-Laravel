# Patient Management System (PMS)

The Patient Management System (PMS) is a comprehensive solution for doctors to streamline their workflow and enhance patient care. This system offers a range of features including secure administrator login, appointment scheduling, a detailed client list, patient health history management, Soap Notes Management and Report Generation, 

## Features

### Secure Administrator Login
- Ensures that only authorized personnel can access the system.
- Utilizes robust authentication mechanisms to safeguard sensitive patient information.

### Appointment Scheduling
- Simplifies the process of booking and managing appointments.
- Provides an intuitive calendar interface for easy scheduling and rescheduling.

### Comprehensive Client List
- Maintains a detailed list of all patients.
- Allows for quick retrieval of patient information.
- Quick search of patient information.

### Patient Health History
- Enables the addition and management of detailed patient health histories.
- Supports various formats of SOAP notes (basic, general, and detailed) to document patient interactions accurately.

### Automated Report Generation
- Generates reports automatically, reducing administrative burden.
- Ensures accuracy and efficiency in patient care documentation.
### Voice to Text
- Supports voice-to-text functionality to streamline the input of patient information
- Improves efficiency and reduces the time required for data entry.

## Images
![Login](image/login.png) ![Dashboard](image/dashboard.png)

![Appointment](image/client_form.png)
![Appointment List](image/client_list.png)
![History](image/history_form.png)
![History List](image/history.png)
![Soap Notea](image/soap1.png)
![Soap Notea](image/soap2.png)
![Report](image/report.png)
![Database](image/db.png)
![All](image/all.png)
## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/labib108/patient-management-system-laravel.git
    ```

2. Navigate to the project directory:
    ```sh
    cd patient-management-system-laravel
    ```

3. Install the dependencies:
    ```sh
    composer install
    npm install
    ```

4. Set up the environment file:
    ```sh
    cp .env.example .env
    ```

5. Generate the application key:
    ```sh
    php artisan key:generate
    ```

6. Set up the database in your `.env` file and run the migrations:
    ```sh
    php artisan migrate
    ```

7. Seed the database with initial data (optional):
    ```sh
    php artisan db:seed
    ```

8. Start the development server:
    ```sh
    php artisan serve
    ```
## Contact

For any queries or support, please contact at [abubuckkersiddikh@gmail.com](mailto:abubuckkersiddikh@gmail.com).

