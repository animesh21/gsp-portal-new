#!/bin/bash

echo "Hello, World!"

git pull origin master
service nginx restart

echo "Done with the pull and nginx restart"
