<?php

namespace App\Models;

//I'm encountering an error when trying to seed the articles database table
//this is Chat-gpt recomendation to solve the problem

use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this line
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //I'm encountering an error when trying to seed the articles database table
    //this is Chat-gpt recomendation to solve the problem
    use HasFactory; // Add this line --------------------------> Indeed, the problem has been solved

    protected $guarded = [];

    // Model relations --------------------
    public function author()
    {
        return $this->belongsTo(related:User::class, foreignKey:'author_id');
    }

    public function keywords()
    {
        return $this->belongsToMany(related:Keyword::class);
    }

    //Business Logic
    public function canEdit(): bool
    {
        if($this->author_id == auth()->user()->id)
        {
            return true;
        }
        if(auth()->user()->is_admin)
        {
            return true;
        }

        return false;
    }
}
