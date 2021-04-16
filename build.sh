#!/bin/bash
php index.php > index.html
cd laws
for folder in $(ls -d */)
do
	cd $folder
	cp ../../folder.php ./index.php
	php index.php > index.html
	rm index.php
	cd ..
	echo "--------------------------------- PHP ---------------------------------------------"
	echo "Done converting $folder to bootstrap"
	echo "-----------------------------------------------------------------------------------"
done
