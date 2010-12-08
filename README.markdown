# 503 Maintenance Page for Nginx

This repo contains a simple Nginx/PHP based maintenance page template that aims to do the following:

1. Inform users that the site they are accessing is down and (if applicable) provide appropriate contact information
2. Prevent crawlers from receiving inappropriate 404 errors when attempting to index pages by catching requests and responding with a 503 response code (service is temporarily unavailable)
3. Tell any crawlers that access an unavailable page how long they should wait before attempting to fetch the page again by specifying a Retry-After header.
4. Allow the server administrator to quickly swap out an existing site for the maintenance page.

With Nginx, item #3 is particularly difficult because the [add_header](http://wiki.nginx.org/HttpHeadersModule#add_header) configuration directive doesn't work when returning a 503 response code. To work around this limitation, this maintenance page defers to PHP for returning the appropriate headers.

Item #4 can be achieved by making the maintenance page the server's default server container. Then, activating it for a certain domain is as simple as disabling the server container that overrides the maintenance page and telling Nginx to reload its configuration.

## Usage

1. Copy public_html to /srv/www/default/public\_html or whatever location is appropriate.
2. Modify maint\_page.conf so that it correctly references your public_html location and whichever socket/port your PHP FastCGI server is listening at.
3. Tell Nginx to include maint\_page.conf however you manage installed sites. (If you installed Nginx in Ubuntu 10.04 via apt-get: symlink maint\_page.conf from /etc/nginx/sites-enabled).
4. Remove/amend any existing default server container.
5. Tell Nginx to reload its configuration.

## Other

This repository is maintained by the developers at [Match Strike](http://matchstrike.net/). You are free to use this as a template for creating your own maintenance page, but please refrain from using our graphics and logo. 