<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Position;

class Employee extends Model
{
	use HasFactory;

	protected $fillable = [
		'first_name',
		'last_name',
		'patronymic',
		'branche',
		'position',
	];

	protected $appends = [ 'full_name', 'position_name' ];

	public function getPositionNameAttribute()
	{
		return Position::whereId($this->position)->first()->name;
	}

	public function getFullNameAttribute()
	{
		return "{$this->last_name} {$this->first_name} {$this->patronymic}";
	}
}
