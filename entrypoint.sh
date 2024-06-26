#!/bin/bash

# Replace placeholders in msmtprc with environment variables
envsubst < /etc/msmtprc.template > /etc/msmtprc

# Set correct permissions for msmtprc
chown www-data:www-data /etc/msmtprc
chmod 600 /etc/msmtprc

# Start Apache
apache2-foreground