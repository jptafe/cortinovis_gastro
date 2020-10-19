#!/bin/bash

mysql -u root -e 'create database contovoris'
mysql -u root contovoris < api/sql/contovoris.sql

php -S localhost:8888
