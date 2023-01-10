<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Formateur extends Model
{
    use HasFactory;

    protected $guarded  = ["id"];

    /**
     * Get the cour that owns the formateur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cour(): BelongsTo
    {
        return $this->belongsTo(Cour::class);
    }
}
