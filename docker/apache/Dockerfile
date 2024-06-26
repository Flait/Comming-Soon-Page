# Use the official PHP image with Apache
FROM php:8.0-apache

# Install msmtp for sending emails
RUN apt-get update && apt-get install -y msmtp gettext-base

# Copy application files to the container
COPY . /var/www/html/

# Copy msmtp configuration template and entrypoint script
COPY msmtprc.template /etc/msmtprc.template
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

# Set entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# Set permissions
RUN chown -R www-data:www-data /var/www/html/

# Update php.ini to use msmtp
RUN echo "sendmail_path = /usr/bin/msmtp -t -i" >> /usr/local/etc/php/conf.d/sendmail.ini

# Expose port 80
EXPOSE 80
