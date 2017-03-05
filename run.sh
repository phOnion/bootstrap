#!/usr/bin/env bash

echo 'Visit http://localhost:8080/ - for "hello, world" '
echo "Visit http://localhost:8080/greet - For general greeting"
echo 'Visit http://localhost:8080/greet/yourName - For personalized greeting'
echo 'Note that when visiting the greeter you need to pass appropriate Accept header value'

php -S localhost:8080 -t public/
