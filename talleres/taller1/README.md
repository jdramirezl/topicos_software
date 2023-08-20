# Laravel Drone Store

Laravel Drone Store is a web application for managing and displaying information about drones. It allows users to create, list, view, and delete drones.

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/jdramirezl/topicos_software
    ```

2. Install Composer dependencies:

    ```bash
    composer install
    ```

3. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration in the `.env` file with your database credentials.

4. Migrate the database:

    ```bash
    php artisan migrate
    ```

5. Serve the application:

    ```bash
    php artisan serve
    ```

6. Access the application in your web browser at `http://localhost:8000`.

## Usage

### Create a Drone

1. Click on the "Insercion" link in the navigation menu.
2. Fill out the form
3. Click the "Create Drone"

### List Drones

1. Click on the "List Drones" link.
2. Look at each drones details in the table.

### View Drone Details

1. Click the "View" button next to a drone in the list.

### Delete a Drone

1. Click the "Delete" button on the drone details.
2. A confirmation dialog will appear to confirm the deletion.
