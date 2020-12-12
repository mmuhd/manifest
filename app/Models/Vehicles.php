<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;

    protected $fillable = [ 'vehicle_type', 'vehicle_color', 'vehicle_brand', 'plate_number', 'chasis_number', 'owner_name', 'owner_phone', 'owner_address', 'driver_name', 'driver_phone', 'driver_address', 'driver_license_id'];


}
