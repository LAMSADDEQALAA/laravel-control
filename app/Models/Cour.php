<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cour extends Model
{
    use HasFactory;

    protected $guarded  = ["id"];
    /**
     * Get the formateur associated with the Cour
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function formateur(): HasOne
    {
        return $this->hasOne(Formateur::class);
    }
}
