<?php

require 'vendor/autoload.php';

/* ADAPTOR */
use App\Adapter\Book;
use App\Adapter\Kindle;
use App\Adapter\eReaderAdapter;
use App\Adapter\Nook;
use App\Adapter\Person;

(new Person)->read(new eReaderAdapter(new Kindle()));
(new Person)->read(new eReaderAdapter(new Nook()));
(new Person)->read(new eReaderAdapter(new Book()));

