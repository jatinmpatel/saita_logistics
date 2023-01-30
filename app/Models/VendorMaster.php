<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorMaster extends Model
{
    use HasFactory;
    protected $table="vendor_masters";
    protected $primarykey= "id";
    public $timeStamps = true;
    protected $fillable = [
    'vendor_code',
    'email',
    'name',
    'mobile_no',
    'address1',
    'address2',
    'pincode',
    'city_id',
    'state_id',
    'country_id',
    'gstin',
    'isActive',
    'selfVendor',
    'third_party_tracking',
    ];

}
