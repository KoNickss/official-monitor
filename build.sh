#!/bin/bash
php index.php > index.html
for folder in $(ls laws)
do
	cd laws/$folder
	cp ../../folder.php ./index.php
	php index.php > index.html
	rm index.php
	cd ../..
	echo "--------------------------------- PHP ---------------------------------------------"
	echo "Done converting $folder to bootstrap"
	echo "-----------------------------------------------------------------------------------"
done
