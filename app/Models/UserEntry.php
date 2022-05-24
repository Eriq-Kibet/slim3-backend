<?php

use Illuminate\Database\Eloquent\Model;

class UserEntry  extends Model
{
    protected $table="octagon";

    protected $fillable = ["firstname","lastname","phonenumber","password"];
}