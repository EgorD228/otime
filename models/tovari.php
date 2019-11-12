<?php

namespace app\models;

use yii\db\ActiveRecord;

class tovari extends ActiveRecord
{
	public function Rules(){
		return[
		[['name','opisanie'],'required']];
	}
	public function attributeLabels(){
		return [
		'name'=>'Название',
		'opisanie'=>'Описание',
		];
	}


}