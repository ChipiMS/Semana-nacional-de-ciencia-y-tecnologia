<?php
namespace Drupal\conferencias\Controller;
class ConferenciasController{
	public function lista(){
		$sql = "select * from {conferencia}";
		$table = db_query($sql)->fetchAll();
		return array(
			'#title' => 'Conferencias',
			'#theme' => 'conferencias-list',
			'#conferencias_list_table' => $table
		);
	}
}
?>
