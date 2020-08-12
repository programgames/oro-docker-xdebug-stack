docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' windows-linux_fpm-xdebug_1
