<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AccountContactRelationshipTrait;
use App\Traits\TraitUuid;

class Contact extends Model
{
    use HasFactory, TraitUuid, AccountContactRelationshipTrait;

    protected $fillable = ['name', 'email', 'phone'];

    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'account_contact');
    }
}