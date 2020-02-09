#!/bin/bash

echo "Creating random 2GB file"
cd ~
mkdir gzip
cd gzip
mkdir gzip-uncompress-files

dd if=/dev/zero of=file bs=2048 count=1024000 

echo "Starting Gzip Compress Benchmark"

for i in 1 2 3
do
    echo "Gzip Compress Test ${i}"
    for y in 1 6 9 # 3 compression speed 1 is fastest and 9 is slowest(but best), 6 is the gzip default
    do
        echo "Gzip compression method -${y}"
        /usr/bin/time -f  "%S %U %P %E" -o gzipCompressOut${i}_${y}.txt gzip -${y} -c file > file_${i}_${y}.gz
    done
done

for test in 1 2 3
do
    echo "Gzip compress test ${test} results"
    echo "-------------------------------------"
    for y in 1 6 9
    do
        echo "Compression method -${y}"
        cat gzipCompressOut${test}_${y}.txt
        gzip -lv file_${test}_${y}.gz #show compress size,ratio and file percentage reduction
    done
done


echo "Starting Gzip uncompress Benchmark"

for i in 1 2 3
do
    echo "Gzip Uncompress Test ${i}"
    for y in 1 6 9
    do
        echo "Gzip uncompression method -${y}"
        /usr/bin/time -f  "%S %U %P %E" -o gzipUncompressOut${i}_${y}.txt gzip -df -c file_${i}_${y}.gz > ./gzip-uncompress-files/file
    done
done

for test in 1 2 3
do
    echo "Gzip uncompress test ${test} results"
    echo "-------------------------------------"
    for y in 1 6 9
    do
        echo "Uncompression method -${y}"
        cat gzipUncompressOut${test}_${y}.txt
    done
done


echo "end gzip benchmark"




    


                    


