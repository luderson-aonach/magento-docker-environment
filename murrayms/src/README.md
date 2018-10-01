## Highlights
- SSL Ready - self-signed certificate for now;
- NodeJS included for Grunt/Gulp tasks;
- Mail system ready (MailHog)

## How To Use
### Before you start
Check if all those ports are free to use:
* `3306` - Database
* `80` - HTTP
* `443` - HTTPS
* `1025` - MAILHOG;
* `8025` - MAILHOG;

### Installing

1. Download this [docker_stack] and extract it in a folder of your choice;

2. Open your local hosts file and add this line:
    * `127.0.0.1 base.murrayms.local`

3. Inside the `src` folder clone the repository to a folder called `project` (be sure you have the right permissions):
    * `$ git clone git@github.com:aonach/murrayms-isobar.git project`

4. Copy the `config\magento\env.php` file to `src\project\app\etc\` folder;
5. Start Docker services, running this command in the same folder where `docker-compose.yml` file is located:
    * `$ docker-compose up -d`

6. Import your database dump by using either of these methods:
    1. Setting up your local MySQL client to access the database;
        * DATABASE = magento
        * ROOT PASSWORD = magento
        * USER = magento
        * USER_PASSWORD = magento
        * HOST = 127.0.0.1
        * PORT = 3306

    2. Connecting to the DB container and importing your dump file:
        * Copy your dump file to `config\dump\` folder; 
        * `$ docker-compose exec db bash`
        * `$ cd /dump`
        * `$ mysql -u magento -p`
        * Using MySQL console run:
            * `use magento;`
            * `source [your_filename_]`

7. Check if the `base_url` value is correct on your database - `core_config_data` table;

8. Enable the project's modules:
   * `$ docker-compose exec php bash`
   * `$ cd project`
   * `$ php bin\magento module\enable --all`


Now you can access your Magento installation through `base.murrayms.local`
 
### Extras
#### Magento Cron
Magento 2.2 has a CLI command to configure cron tasks, just connect into your PHP container and run:
* `$ php bin/magento cron:install`

Use --force to rewrite an existing Magento crontab.

We do recommend to set all indexers to 'schedule' mode:

1. Run this CLI command:
    * `$ php bin/magento indexer:set-mode schedule`

#### Using Redis
We have a Redis container in the project.
Redis is already set in `env.php` file. You don't need to run these commands.

1. Redis as default caching - DB 0 [required]
    * `$ php bin/magento setup:config:set --cache-backend=redis --cache-backend-redis-server=redis --cache-backend-redis-port=6379 --cache-backend-redis-db=0`

2. Redis Page Caching - DB 1
    * `$ php bin/magento setup:config:set --page-cache=redis --page-cache-redis-server=redis --page-cache-redis-port=6379 --page-cache-redis-db=1 --page-cache-redis-compress-data=1`

3. Redis for Session Storage - DB 2
    * `$ php bin/magento setup:config:set --session-save=redis --session-save-redis-host=redis --session-save-redis-port=6379 --session-save-redis-log-level=4 --session-save-redis-db=2`

#### Mail System
We are using Mailhog to catch up all e-mails sent by Magento, no matter for which address they are being sending.
We can access all e-mail catched going to the configured domain through the port 8025:
Ex. `base.murrayms.local:8025`
