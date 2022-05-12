<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable = [
        'vendorName', 'vendorLastname','vendorLocation','vendorCategory', 'clientName','clientLastname','clientEmail','clientPhone',
        'clientLocation','projectName','projectDesc','projectCost','projectImage',
        'projectTimeline','projectInitialDeposit',
    ];
}

