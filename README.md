# event_management

## Installation

- Paste the project files into a directory.
- Make sure your local domain is pointed to the web folder.
- Run `composer install` in the root of your installation. This will download all the required packages for the platform, and add the map structure.
- Fill in your database credentials via the UI and install your drupal site.
- In your settings.php, at the bottom add `$settings['config_sync_directory'] = 'sites/default/config/sync';`
- Run drush config-import -y to enable the required modules and import all configuration that comes with them

<br>

### If you have a problem with configs, please find the attached database 'database/drupal.sql' in the root directory and import it.

Admin credentials
- username = salah
- password = asd12345
