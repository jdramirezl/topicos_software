# Laravel Drone Store

Laravel Drone Store is a web application for managing and displaying information about drones. It allows users to create, list, view, and delete drones.

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/your-username/laravel-drone-store.git
    ```

2. Navigate to the project directory:

    ```bash
    cd laravel-drone-store
    ```

3. Install Composer dependencies:

    ```bash
    composer install
    ```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration in the `.env` file with your database credentials.

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Migrate the database:

    ```bash
    php artisan migrate
    ```

7. Serve the application:

    ```bash
    php artisan serve
    ```

8. Access the application in your web browser at `http://localhost:8000`.

## Usage

### Create a Drone

1. Click on the "Create Drone" link in the navigation menu.
2. Fill out the form with the drone's details, including the name, brand, base price, and description.
3. Click the "Create Drone" button to save the drone.

### List Drones

1. Click on the "List Drones" link in the navigation menu to view a list of all drones.
2. Each row in the list displays the drone's ID, name, and a "View" button.

### View Drone Details

1. Click the "View" button next to a drone in the list to view its details, including its ID, name, brand, base price, and description.
2. On the drone details page, you can also find a "Delete" button to remove the drone.

### Delete a Drone

1. Click the "Delete" button on the drone details page to delete the drone.
2. A confirmation dialog will appear to confirm the deletion.

## Contributing

Contributions to Laravel Drone Store are welcome. If you have any suggestions, enhancements, or bug fixes, please open an issue to discuss them before creating a pull request.

Please make sure to update tests as appropriate.
