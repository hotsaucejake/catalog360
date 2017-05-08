<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
   public function vendorId()
   {
      return $this->belongsTo(\App\Vendor::class, 'vendor_id');
   }
}
