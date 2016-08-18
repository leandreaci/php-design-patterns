<?php


require 'vendor/autoload.php';


use App\Book;
use App\BookInterface;
use App\Kindle;
use App\eReaderAdapter;


class Person
{
	
	public function read(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}
}

(new Person)->read(new eReaderAdapter(new Kindle()));

