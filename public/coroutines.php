<?php

if (!extension_loaded('swoole')) {
    die('swoole extension not installed');
}

Co\run(function () {
    go(function () {
        Co::sleep(5);
        echo "Done 1\n";
    });
    go(function () {
        Co::sleep(5);
        echo "Done 2\n";
    });
    go(function () {
        Co::sleep(5);
        echo "Done 3\n";
    });
    go(function () {
        Co::sleep(5);
        echo "Done 4\n";
    });
    go(function () {
        Co::sleep(5);
        echo "Done 5\n";
    });
});