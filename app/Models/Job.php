<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{
    protected $table = 'job_listing'; //this is corresponding with the table name in our database. normally it thinks that we have a Job table but we don't so we use this option to reference the table that this Eloquent table to contact and get the content of the table
    protected $fillable = ['title', 'salary']; //this was added because when we ran a create() function to add a record in the table using the 'php artisan tinker' console, it returned an error like are you sure you want to use this method to populate your table. Just like a protective measure.
    // so now if we query Job::all() it returns all the data in our table called job_listing.

    //This was how I implemented this Model to send to route and called the fnction to deliver data. Now I am using the Eloquent  mdoel to to that above. above 
    // public static function all(): array
    // {

    //     return [
    //         [
    //             'id'=>'0',
    //             'title'=>'Programmer',
    //             'salary'=>'10,000'
    //         ],
    //         [
    //             'id'=>'1',
    //             'title'=>'Doctor',
    //             'salary'=>'20,000'
    //         ],
    //         [
    //             'id'=>'2',
    //             'title'=>'Truck Driver',
    //             'salary'=>'15,000'
    //         ]
    //         ];
    // }
    // public static function find(int $id): array
    // {
    //    $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
    //    if(! $job){
    //         abort(404);
    //     }
    //    return $job;
    // }
};

?>