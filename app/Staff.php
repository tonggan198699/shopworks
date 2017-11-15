<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

  /**
   * The attributes that are mass assignable.
 * @var array
 */
  protected $fillable = [
    'id','rotaid','daynumber','staffid','slottype','starttime','endtime',
    'workhours','premiumminutes','roletypeid','freeminutes','seniorcashierminutes',
    'splitshifttimes'
  ];

  protected $dates = [
    'starttime','endtime'
  ];
  

  /**
   * Up Connection for this Model
   */
  protected $connection = 'mysql_connection';

  /**
 * @var string
 */
  protected $table = 'rota_slot_staff';

}
