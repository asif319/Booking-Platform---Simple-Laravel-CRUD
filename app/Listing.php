<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes;
    protected $fillable = ['id','user_id','title','category','keywords','city','address','state','zip_code','upload_file',
        'description','phone','website','email','fb','twitr','google','elevator','workspace','booking','internet','parking',
        'street','smoking','events','monday_op','monday_cl','tuesday_op','tuesday_cl','wednesday_op',
        'wednesday_cl','thursday_op','thursday_cl','friday_op','friday_cl','saturday_op','saturday_cl',
        'sunday_op','sunday_cl','pricing_product','pricing_des','price'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
