
# Use an official Apache base image
FROM httpd:2.4

# Append Listen 8800 in .conf file
RUN echo "Listen 8800" >> /usr/local/apache2/conf/httpd.conf

# Set the working directory in the container
WORKDIR /usr/local/apache2/htdocs

# Copy  files into the container
COPY . .

# Expose the port Apache listens on
EXPOSE 8800

# Start Apache when the container runs
CMD ["httpd-foreground"]

