# Pull wordpress image
FROM wordpress:5.6

# Update .htaccess increasing the upload filesize limit to 256MB
RUN echo 'php_value upload_max_filesize 256M' > '/var/www/html/.htaccess'

# Change owner to www-data
Run chown -R www-data:www-data /var/www/html/