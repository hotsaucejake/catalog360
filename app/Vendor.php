<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vendor extends Model
{
   public function services()
   {
      return $this->hasMany(\App\Service::class);
   }
}
