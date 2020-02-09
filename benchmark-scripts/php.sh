#!/bin/bash
echo "Starting PHP Benchmark"

for i in 1 2 3
do
    echo "php bench Test ${i}"
    ~/.composer/vendor/bin/phpbench run testBench.php --report=aggregate >test${i}.txt
done

for test in 1 2 3
do
    echo "-------------------------------------"
    echo "Php test ${test}"
    cat test${test}.txt
done

echo "end php benchmark"