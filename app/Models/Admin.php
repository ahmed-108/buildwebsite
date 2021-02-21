<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table ="admin";
    protected $fillable=['contact_section','fontcolor','namewebsite','description','background_color','contact_name','contact','created_at','updated_at','about','namebrand','video','icon1','icon2','icon3','icon4','icon5','icon6','caption1','caption2','caption3','caption4','caption5','caption6','sliderpic1','sliderpic2','sliderpic3','sliderpic4','emailcompany','tel','fax','logocont','background','backgroundnav'];
}
