<?php
    $redis = new Redis();

    try {
        $redis->connect('redis', 6379, 30);
        $redis->set("testKey", "testVlaue", 1800);
        $result = $redis->get("testKey");
        echo sprintf("Redis test ok, testKey value is %s", $result);
    } catch(Exception $e) {
        echo sprintf("Redis exception occurred, message is %s", $e->getMessage());
    }