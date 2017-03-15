# Contribution guide for giulia

Okay giulia, are you ready? This is going to hurt a bit :)

## setting up github desktop and check out repo

* first install github desktop from https://desktop.github.com/
* then go to the [repository](https://github.com/faebser/10201)
* and check it out with the github software
* now the code is on your harddisk and ready to edit it BUT

## setting up your computer for php/scss

* Open a terminal window
* type in ```php -v``` if should show something like this:
```bash
PHP 7.1.2 (cli) (built: Feb 14 2017 21:24:49) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies
```
* if the output is something like ```command not found``` you need to install PHP (maybe ask your roommate ;) )
* Now inside of the terminal window use the ```cd``` command to change into the directory of the repository. like ```cd /home/giulia/git/10201```
* In the directory run ```php -S localhost:8000``` to start the PHP development server
* switch to your browser and type ```localhost:8000``` into the address bar
* if it show the muda homepage you were successfull otherwise not ;)
* Now we need to install SASS to transform our .scss into .css files (more docs here: http://sass-lang.com/install)
* Open another terminal window
* Type ```gem install sass```
* After the commands is finished, type ```sass -v``` to see if it works
* Now you need again to move into the folder of the repository with the ```cd``` command
* The scss files are not located in the root of the repository folder but at asses/scss
* To start the transformation ```cd``` into the assets folder
* Run the following command ```sass --watch scss/:css/```
* That means that sass will watch our scss files in the scss folder and if you change something in them, it will transform them into a css files and place it into the css/ folder
* Preparations are finished :D

## Actually fixing an issue

* start with the image issue: https://github.com/faebser/10201/issues/12#issuecomment-286704126

