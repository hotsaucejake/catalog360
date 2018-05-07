<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
   public function vendorId()
   {
      return $this->belongsTo(\App\Vendor::class, 'vendor_id');
   }
   
   public function vendor()
   {
      return $this->belongsTo(\App\Vendor::class);
   }

   /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoryId()
    {
        return $this->belongsTo(\Voyager::modelClass('Category'), 'category_id');
    }
}
