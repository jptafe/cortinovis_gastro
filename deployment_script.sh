#!/bin/bash

mysql -u root -e 'drop database contovoris'
mysql -u root -e 'create database contovoris'
mysql -u root contovoris < api/sql/contovoris.sql

php -S localhost:8888

#react
#cd reactapp
#npm install
#npm run build
#mv dist ..

