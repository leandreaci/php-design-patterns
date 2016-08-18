<?php

require 'vendor/autoload.php';

use App\Adapter\Kindle;
use App\Adapter\eReaderAdapter;
use App\Adapter\Person;

(new Person)->read(new eReaderAdapter(new Kindle()));

