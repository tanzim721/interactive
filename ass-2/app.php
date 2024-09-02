#!/usr/bin/env php
<?php
// application.php

require_once __DIR__ . '/src/FinanceManager.php';

$manager = new FinanceManager();

$manager->saveData();
