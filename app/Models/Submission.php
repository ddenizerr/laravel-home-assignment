<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string email
 * @property string comment
 * @property string name
 */
class Submission extends Model
{
    use HasFactory;

    protected $table = 'submissions';
    protected $fillable = [ 'name','email', 'comment'];

    public function mail(): string
    {
       return $this->email;
    }
    public function comment(): string
    {
        return $this->comment;
    }
    public function name(): string
    {
        return $this->name;
    }
}
