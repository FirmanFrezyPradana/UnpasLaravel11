<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
class Post extends Model{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = ['title','author','slug','body'];

    public function author() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}