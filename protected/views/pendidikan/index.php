<?php
/* @var $this PendidikanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Perorangan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create ArtPerorangan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage ArtPerorangan', 'url'=>array('admin')),
);
?>

<h1>Art Perorangan - Keterangan Pendidikan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
