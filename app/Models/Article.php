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
}
