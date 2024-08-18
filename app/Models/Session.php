<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'drawer_sessions';

    protected function open(): Attribute {
        return Attribute::make(
            get: fn (string $value) => $value == 1 ? "Open" : "Close",
        );
    }
}
