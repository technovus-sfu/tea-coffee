# Tea Coffee Theme :tea: :coffee:
Tea Coffee theme for wordpress.org

# Setup
## Ubuntu 17.04
### Installation and configuration
Follow instructions listed on [this site](https://websiteforstudents.com/installing-wordpress-ubuntu-17-04-17-10-apache2-mariadb-php/).

### Troublshooting
#### Timeout error
If MariaDB fails to start and returns a timeout error
`mariadb.service: failed with result 'timeout'`, restart your computer and try again.

Input the below to check if problem is solved
```bash
    sudo systemctl start mariadb.service
```

If problem persists try [the following](https://unix.stackexchange.com/questions/249530/mariadb-dependency-problems-leaving-unconfigured) and restart afterwards.

#### Display Error
After installation, if the WordPress splash screen does not show up in localhost, run the below
```bash 
    # navigate to server directory
    cd /var/www/html/
    # Rm default server index
    sudo rm index.html index.php
    # copy all wordpress files into the home server index
    sudo cp -rf worpress/* .
```

Goto your browser and enter `localhost` 

Please report [issues](../../issues) and suggest [changes](../../pulls) to better modify these installation instructions
