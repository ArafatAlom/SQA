<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Profile Model
 *
 * @property int $id
 * @property string $name
 * @property string $user_id
 * @property string $email
 * @property string $gender
 * @property string $contact_no
 * @property string $address
 *
 * @package App\Models
 */
class Profile extends Model
{
    use HasFactory;
    public $timestamps = false;
}
