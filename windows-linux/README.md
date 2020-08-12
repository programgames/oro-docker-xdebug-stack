docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' windows-linux_fpm-xdebug_1

windows command :

docker inspect -f "{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}" windows-linux_fpm-xdebug_1
