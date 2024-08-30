# Use the official Kali Linux rolling image as a base
FROM kalilinux/kali-rolling

# Update package lists and install Apache2
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php

# Copy custom Apache configuration file into the container
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf 
COPY ./html /var/www/html

# Expose port 80 for the web server
EXPOSE 80

# Start Apache2 when the container runs
CMD ["apachectl", "-D", "FOREGROUND"]
