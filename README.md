# event_management

Project set-up
This chapter is your installation guide on how to set up the project code. Look at the
last page of the book for the link to download the files.
The following steps are needed to set up the platform:
1. Past the project files into a directory. Make sure the web and drush folder are
in the root of the project.
2. Make sure your local domain is pointed to the web folder
3. Run composer install in the root of your installation. This will download all the
required packages for the platform, and add the map structure.
4. Fill in your database credentials via the UI and install your drupal site.
5. In your settings.php, as read in the configuration management chapter, at the
bottom add
$settings['config_sync_directory'] = '../config/global';
45
6. Run drush config-import -y to enable the required modules and import all
configuration that comes with them
