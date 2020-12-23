<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplies extends Model
{

     protected $table = 'supplies';
     protected $primaryKey = 'ID';
     protected $fillable = [
          'ID','SUP_FSN_NUM','SUP_NAME',
          'SUP_NAME_EN','SUP_TYPE_ID','SUP_TYPE_SUP_ID',
          'CONTENT','PACKING','AVE_RATE','PRICE_CENTER','PRICE_LAST',
          'UNIT_TOTAL','SUP_UNIT_ID','UNIT_TOTAL_SUB','IMG','SUP_BARCODE','SUP_NUM','ACTIVE',
          'MAX','MIN','DATE_TIME_REGIS','HR_REGIS_ID','HR_REGIS_NAME','SUP_TYPE_KIND_ID','SUP_PROP',
          'DECLINE_ID','CONTINUE_PRICE_ID','SUP_TYPE_MASTER_ID','TPU_NUMBER','SUP_CODE','SUP_GENUS','SUP_CAT',
          'SUP_CAT_TYPE','SUP_GROUP','SUP_VENDOR_CODE','SUP_REMARK','SUP_MANU','SUP_SYNONYMS_01','SUP_SYNONYMS_02',
         
     ];
}
