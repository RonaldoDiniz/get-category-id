<?php

// pegar ids das categorias do novo site com base no nome que etenho e na ordem do csv, o resultado deve manter as celulas em branco, por isso arrays vazios
$diretorios = array(
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"Barbante Barroco Decore 180m",
"REVISTAS",
"Renda Tricô Círculo",
""
);


// ativando magento
define('MAGENTO', realpath(dirname(__FILE__)));
require_once MAGENTO . '/app/Mage.php';
umask(0);
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);


echo '<pre>';


foreach ($diretorios as $value) {

	$category = Mage::getResourceModel('catalog/category_collection')->addFieldToFilter('name', $value); // pega o nome da pasta
	$cat= $category->getData();
	$categoryid = ($cat[0][entity_id])? $cat[0][entity_id] : false ; // pega id, se a categoria não existir retorne false;

	echo $categoryid? $categoryid . "\n" : $value . "\n";
}

echo '</pre>';
