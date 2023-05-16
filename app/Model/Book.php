<?php
namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'book_title',
        'author',
        'publish_date',
        'genre_id',
        'publisher_id',
        'location_id',
        'is_new'
    ];
}
