<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//relacion hasMany, tiene muchos libros...
    public function books(){
    	return $this->hasMany(Book::class);
    }

    public function getNumBooksAttribute(){
    	return count($this->books);
    }

    public function getNumBooksFilterAttribute(){
    	$books = $this->books->where('status','public');
    	return count($books);
    }
}
