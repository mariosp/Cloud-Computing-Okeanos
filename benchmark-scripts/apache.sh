#!/bin/bash

cd ~
mkdir apache
cd apache

echo "Starting Apache test"

for i in 1 2 3
do
    echo "Apache Test ${i}"
    ab -n 10000 -c 100 -g details_${i} http://83.212.112.177/ > apache_${i}.txt
done

for i in 1 2 3
do
    echo "Apache Test ${i} results"
    cat apache_${i}.txt
done

echo "end of apache test"

