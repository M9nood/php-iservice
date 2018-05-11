<?php
ob_start();
session_start();
class HomeController extends Controller
{
	public function actionIndex(){
		$this->render("index");
	}

	public function actionRequestForm($id = null){
		$model = new Request();

        if(!empty($_POST["Request"])){
        	$id = $_POST["Request"]["id"];
            if(!empty($id)){
                $model = Request::model()->findByPk($id);
            }
            $model->_attributes = $_POST["Request"];

            if($model->save()){
                $this->redirect(array("RequestHistory"));
            }
        }
        if(!empty($id)){
            $model = Request::model()->findByPk($id);
        }
        $this->render("RequestForm",array(
            "model" => $model
        ));
	}

	function actionRequestHistory(){
		$model = new Request();
		$this->render("RequestHistory",array(
			"model" => $model
		));
	}

	function actionRequestHistoryForm($id){
		$model = Request::model()->findByPk($id);
		$this->render("RequestHistoryForm",array(
			"model" => $model
		));
	}

	function actionDeviceList(){
		$model = new Device();
		$this->render("DeviceList",array(
			"model" => $model
		));
	}

	public function actionDeviceForm($id = null){
		$model = new Device();

        if(!empty($_POST["Device"])){
        	$id = $_POST["Device"]["id"];
            if(!empty($id)){
                $model = Device::model()->findByPk($id);
            }
            $model->_attributes = $_POST["Device"];

            if($model->save()){
                $this->redirect(array("DeviceList"));
            }
        }
        if(!empty($id)){
            $model = Device::model()->findByPk($id);
        }
        $this->render("DeviceForm",array(
            "model" => $model
        ));
	}

	function actionDeviceDelete($id){
		Device::model()->deleteByPk($id);
		$this->redirect(array("DeviceList"));
	}
}
?>