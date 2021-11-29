<?php 
namespace App\Models;

class Produk extends Model{
	protected $table =  'produk';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'harga' => 'decimal:2'
	];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
	
	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	function getTanggalProdukAttribute(){
		$tanggal = $this->crated_at;
		return strftime("%d %b %y", strtotime($this->crated_at));
	}

}