<?php

require __DIR__ . '/class/HelloWorld.php';
require __DIR__ . '/class/WhatTimeIs.php';

echo HelloWorld::MESSAGE;

echo "\n";

echo WhatTimeIs::now();