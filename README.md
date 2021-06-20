# Docker LEMP Stack

This Docker container includes the latest versions of:

- PHP (https://hub.docker.com/_/php)
- NGINX (https://hub.docker.com/_/nginx)
- MariaDB (https://hub.docker.com/_/mariadb)

**Prerequisites:**

For iOS or WIndows, you need to install Docker Hub: https://hub.docker.com/

For Linux, make sure that the _docker_ and _docker-compose_ packages are installed.

**Setting Up**

1. In terminal, locate where you would like the container to be stored and run the following command: `docker run -v ${PWD}:/git alpine/git clone git@github.com:
   jamie-src/Docker-LEMP-Stack.git .`
2. Run `docker-compose up`
3. Go to http://127.0.0.1.
4. Create PHP scripts in `app` and public files in `app/public`
