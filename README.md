
## my_hiking_php
Originally this is a Django application:
- https://github.com/nvermaas/OwlsNest
- https://uilennest.net/hiking_nico/

Partially rewritten in PHP as an exercise.

### manual deploy in Docker
Clone this repo on a host machine.

> git clone https://github.com/nvermaas/my_hiking_php
> cd my_hiking_php
> docker build -t my_hiking_php:latest .
> docker run -d -p 8080:80 my_hiking_php:latest

* run at: http://localhost:8080/
