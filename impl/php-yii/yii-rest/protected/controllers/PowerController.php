<?php

class PowerController extends CController
{
    public function actionMain($base, $exp)
    {
	header('Content-type: application/json');
	echo CJSON::encode(array(
	    'result' => pow($base, $exp),
	));
    }
}