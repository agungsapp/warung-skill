<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'nama',
		'email',
		'password',
		'no_hp',
		'alamat',
	];

	// Jika Anda ingin menyembunyikan password saat model di-serialize
	protected $hidden = [
		'password',
	];
}
