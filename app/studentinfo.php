<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentinfo extends Model
{  public $timestamps = false;
   protected $fillable = [
        'username','email','firstname','lastname','city','country','batchyear','studentnumber','contact','dateofbirth','hosteldaysc','hostelname','hostelroom','fathername','parentcontact','guardianname','guardiancontact','category','houseno','street','townvillage','district','state','pincode','guardianhno','guardianstreet','guardiancity','guardiandistrict','guardian','guardianstate','guardianpincode','10','12','currsem','1sem','2sem','3sem','4sem','5sem','6sem','7sem','8sem','section','branch','gender','entranceexamrank','graduationper'
    ];

}
