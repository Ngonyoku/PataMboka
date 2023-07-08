<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    # Is required for form submission
    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];
    /**
     * The alternative to this is adding
     * 
     *    Model::unguard();
     * 
     * to the #boot method in the AppServiceProvider class located in app/providers dir
     * 
     */

    # Filter By Tags
    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) { //If tag exists then proceed...
            $query->where('tags', 'like', '%' . request('tag') . '%'); //Searches for the tag entered
        }

        if($filters['search'] ?? false) { //If search exists then proceed...
            $query->where(
                        'title',
                        'like', 
                        '%' . request('search') . '%'
                    )->orWhere(
                        'description',
                        'like', 
                        '%' . request('search') . '%'
                    )->orWhere(
                        'tags',
                        'like', 
                        '%' . request('search') . '%'
                    )
            ; //Searches for the search query entered
        }
    }
}
