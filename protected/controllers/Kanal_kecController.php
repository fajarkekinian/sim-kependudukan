<?php

class Kanal_kecController extends Controller
{
	public function actionView($id)
	{
		$merge_id = '';

		$criteria_kec= new CDbCriteria;  
		$criteria_kec->condition ='id_kecamatan = "'.$id.'" ';
		$kecamatan = Kecamatan::model()->findAll($criteria_kec);
		foreach($kecamatan as $kec)
		{
		   $criteria_des= new CDbCriteria;  
		   $criteria_des->condition ='id_kecamatan = "'.$kec->id_kecamatan.'" ';
		   $desa = DesaKelurahan::model()->findAll($criteria_des);
		   foreach($desa as $des)
		   {
		       $merge_id .= $des->id_desa_kelurahan.',';
		   }
		}
      echo $merge_id;
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}