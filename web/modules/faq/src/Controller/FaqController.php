<?php
namespace Drupal\faq\Controller;
class FaqController{
	public function lista(){
		$sql = "select * from {faq}";
		$table = db_query($sql)->fetchAll();
		return array(
			'#title' => 'FAQ',
			'#theme' => 'faq-list',
			'#faq_list_table' => $table
		);
	}
}
?>
