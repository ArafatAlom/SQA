<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Payment Model
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property int $teacher_id
 * @property string $gateway
 * @property string $pay_no
 * @property string $trnx
 * @property float $amount
 *
 * @package App\Models
 */
class Payment extends Model
{
    use HasFactory;
    public $timestamps = false;
}
