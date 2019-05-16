<?php
header('Content-Type: text/html; charset=utf-8');
die(encode_json($_REQUEST, JSON_PRETTY_PRINT));