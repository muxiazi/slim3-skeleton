<?php

foreach (glob(base_path('/routes/*.php')) as $route) {
    require_once $route;
}
