<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaffleTicket extends Model
{
    use HasFactory;
    protected $fillable =['title','price','start_date','end_date', 'status', 'first_ticket_no','last_ticket_no'];

}
