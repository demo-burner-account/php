FROM mysql:8.0

# Set an insecure password
ENV MYSQL_ROOT_PASSWORD=example

# Copy over our SQL queries
COPY ./init.sql /init.sql

# Startup MySQL and run the queries
CMD ["mysqld", "--init-file=/init.sql"]
