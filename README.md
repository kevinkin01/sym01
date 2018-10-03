# sym01
symfony version basic 4.1.5.2

## 1 installation laster version of symfony
composer create-project symfony/website-skeleton sym01

##.gitignore
add the hidden folders or files 

## first commit
git  add .
git commit -m "first commit"
git remote add name URL/GIT
git push ori master

## creating readme.md

## updating librairies
composer update

## structure MVC
frontal controller: public/index.php

models: src/Entity

views: templates/

controllers: src/controller/

## file type best practise

yaml => configuration

routing => annotations

datas => json or other

## create first controller
php bin/console make:controller