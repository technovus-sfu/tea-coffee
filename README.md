# Website :computer:
Technovus theme for wordpress.org

## Setup
### Ubuntu 17.04
 - Install PHP
    ```bash
    sudo apt-get install php php-common php-mbstring php-xmlrpc php-soap php-gd php-xml php-intl php-mysqlnd php-cli php-mcrypt php-ldap php-zip php-curl
    ```
 - Download Wordpress
    ```bash
    # Download latest WordPress
    cd /tmp && wget https://wordpress.org/latest.tar.gz
    # Extract to default Apache2 root folder
    sudo tar -zxvf latest.tar.gz -C /var/www/html
    # modify directory permission
    sudo chown -R www-data:www-data /var/www/html/
    sudo chmod -R 755 /var/www/html/
    ```bash
 - Configure Apache2
    ```
    sudo nano /etc/apache2/sites-available/wordpress.conf
    ```