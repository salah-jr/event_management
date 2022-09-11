# event_management

## Installation

- Clone the project files into a directory.
- Make sure your local domain is pointed to the web folder.
- Run `composer install` in the root of your installation. This will download all the required packages for the platform.
- Fill in your database credentials via the UI and install your drupal site.
- In your settings.php, at the bottom add `$settings['config_sync_directory'] = 'sites/default/config/sync';`
- Run `drush config-import -y` to enable the required modules and import all configuration that comes with them

### Note
- The route for the subtask "page for listing published events is: `/events/published`"

<br>

### If you have a problem with configs, please find the attached database 'database/drupal.sql' in the root directory and import it.

=> Admin credentials in case of importing the database:-
- username = salah
- password = asd12345

<br> 

## The docker version of the task
[Events Management with Docker...](https://github.com/salah-jr/Event_management_docker)

<br>
<hr>

![Opera Snapshot_2022-09-12_013748_localhost](https://user-images.githubusercontent.com/26637798/189553896-f1e29aa8-078c-4581-ad45-1b94faf41d24.png)
![Opera Snapshot_2022-09-12_013936_localhost](https://user-images.githubusercontent.com/26637798/189553898-68188e6c-050d-4b2e-a350-2373bec868f8.png)
![Opera Snapshot_2022-09-12_013309_localhost](https://user-images.githubusercontent.com/26637798/189553899-52c7be63-143f-49a6-bd5c-4b7c805a7ee8.png)
![Opera Snapshot_2022-09-12_013353_localhost](https://user-images.githubusercontent.com/26637798/189553901-88ffa01d-59c5-4f3e-a1a4-77e46d02f310.png)
![Opera Snapshot_2022-09-12_013419_localhost](https://user-images.githubusercontent.com/26637798/189553902-0e90f041-40ad-40c0-8e50-182353909f0b.png)
![Opera Snapshot_2022-09-12_013447_localhost](https://user-images.githubusercontent.com/26637798/189553903-f26efdbe-82dc-4ee6-9a68-76086f9a161f.png)
![Opera Snapshot_2022-09-12_013549_localhost](https://user-images.githubusercontent.com/26637798/189553904-0b968f94-d981-436b-a0f1-bc5ad6ed48f0.png)
![Opera Snapshot_2022-09-12_013656_localhost](https://user-images.githubusercontent.com/26637798/189553905-3b8b479e-4568-4e49-92d2-8af0dc9dd31d.png)
