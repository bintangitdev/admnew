<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $primaryKey = 'id';

    /**
* fillable
*
* @var array
*/
protected $fillable = [
    'NamaLengkap', 'Karir', 'Location', 'Degree',
    'Email', 'Linkid', 'About','Image'
];
}
