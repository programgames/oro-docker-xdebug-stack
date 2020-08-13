#Docker stack for orocommerce with xdebug

Locally :

- `git clone git@github.com:programgames/oro-docker-xdebug-stack.git`
- `cd oro-docker-xdebug-stack`
- `cp .env.dist .env`
- `if you are on linux :
    - change to `xdebug.remote_host=docker.for.mac.localhost` to `xdebug.remote_host=ip_of_docker_host`
      when ip_of_docker_host if the of your local machine , running docker , phpstorm...
      You can use this command : `hostname -I | awk '{print $1}'`
    - `docker-compose start`
- `docker-compose up -d`
- configure phpstorm xdebug port to 9001
- set a breakpoint in index_dev.php
- open google-chrome/firefox ( 127.0.0.1:10004) with xdebug helper extension with PHPSTORM as ide key in preference.
- enjoy :)

Remotely :



