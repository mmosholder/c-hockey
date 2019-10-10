#!/usr/bin/env bash

cd /var/www/public

yes | sudo wp cli update --allow-root

wp core download

wp config create --dbname=scotchbox --dbuser=root --dbpass=root

wp core install --url=192.168.33.10 --title="gc" --admin_user=admin --admin_password=admin --admin_email=admin@gc.local

# Activate Emerson Stone Theme
wp theme activate gc

# Install & Activate Plugins
wp plugin install timber-library --activate
wp plugin install plugins/advanced-custom-fields-pro.zip --activate
wp plugin install plugins/es-welcome.zip --activate --force
wp plugin install plugins/acf-smart-button.zip --activate
wp plugin install wp-nested-pages --activate

# Add basic image to the media
wp media import downloads/office-shelf.png

# Change Permalink Structure
wp option update permalink_structure '/%postname%'

# Delete Plugins
wp plugin delete hello akismet

