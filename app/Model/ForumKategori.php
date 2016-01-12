<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ForumKategori extends Model
{
    //
	protected $primaryKey = 'id_kategori';
	protected $table = 'tbl_forum_kategori';
	public $timestamps = false;

	protected $fillable = [
		'nm_kategori',
		'id_post_last',
		'kat_desc'
	];

	/**
	 * Relationship
	 *
	 */
	public function topiks()
	{
		return $this->hasMany('App\Model\ForumTopik','id_forum_kategori','id_kategori');
	}

	public function postsThrough()
	{
		return $this->hasManyThrough('\App\Model\ForumPost','\App\Model\ForumTopik','id_forum_kategori','id_forum_topik');
	}

	public function posts(){
		return $this->hasMany('\App\Model\ForumPost','id_forum_kategori','id_kategori');
	}

}
