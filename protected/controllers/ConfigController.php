<?php
ob_start();
session_start();
class ConfigController extends Controller
{
	public function actionIndex(){
		$this->render("index");
	}

	function actionRepairType(){
		$model = new RepairType();

		$this->render("RepairType",array(
			"model" => $model
		));
	}

	function actionRepairTypeForm($id =null){
		// หากมีข้อมูล
		if(!empty($_POST['RepairType'])){
			$repairType = new RepairType();
			$id = $_POST["RepairType"]["id"];

			if(!empty($id)){
				$repairType = RepairType::model()->findByPk($id); // update
			}
			$repairType->_attributes = $_POST['RepairType'];
			if($repairType->save()){
				$this->redirect(array("RepairType"));  
			}
		}
		$model = new RepairType();

		if(!empty($id)){
			$model = RepairType::model()->findByPk($id);
		}

		$this->render("RepairTypeForm",array(
			"model" => $model
		));
	}

	function actionRepairTypeDelete($id){
		RepairType::model()->deleteByPk($id);
		$this->redirect(array("RepairType"));
	}

	function actionProjectType(){
		$model = new ProjectType();

		$this->render("ProjectType",array(
			"model" => $model
		));
	}

	function actionProjectTypeForm($id =null){
		// หากมีข้อมูล
		if(!empty($_POST['ProjectType'])){
			$repairType = new ProjectType();
			$id = $_POST["ProjectType"]["id"];

			if(!empty($id)){
				$repairType = ProjectType::model()->findByPk($id);
			}
			$repairType->_attributes = $_POST['ProjectType'];
			if($repairType->save()){
				$this->redirect(array("ProjectType"));
			}
		}
		$model = new ProjectType();

		if(!empty($id)){
			$model = ProjectType::model()->findByPk($id);
		}

		$this->render("ProjectTypeForm",array(
			"model" => $model
		));
	}
	function actionProjectTypeDelete($id){
		RepairType::model()->deleteByPk($id);
		$this->redirect(array("ProjectType"));
	}

	function actionDeviceType(){
		$model = new DeviceType();

		$this->render("DeviceType",array(
			"model" => $model
		));
	}

	function actionDeviceTypeForm($id =null){
		// หากมีข้อมูล
		if(!empty($_POST['DeviceType'])){
			$repairType = new DeviceType();
			$id = $_POST["DeviceType"]["id"];

			if(!empty($id)){
				$repairType = DeviceType::model()->findByPk($id);
			}
			$repairType->_attributes = $_POST['DeviceType'];
			if($repairType->save()){
				$this->redirect(array("DeviceType"));
			}
		}
		$model = new DeviceType();

		if(!empty($id)){
			$model = DeviceType::model()->findByPk($id);
		}

		$this->render("DeviceTypeForm",array(
			"model" => $model
		));
	}

	function actionDeviceTypeDelete($id){
		DeviceType::model()->deleteByPk($id);
		$this->redirect(array("DeviceType"));
	}

	function actionGroupSetting(){
		$model = new Group();

		$this->render("Group",array(
			"model" => $model
		));
	}

	function actionGroupSettingForm($id =null){
		// หากมีข้อมูล
		if(!empty($_POST['Group'])){
			$repairType = new Group();
			$id = $_POST["Group"]["id"];

			if(!empty($id)){
				$repairType = Group::model()->findByPk($id);
			}
			$repairType->_attributes = $_POST['Group'];
			if($repairType->save()){
				$this->redirect(array("GroupSetting"));
			}
		}
		$model = new Group();

		if(!empty($id)){
			$model = Group::model()->findByPk($id);
		}

		$this->render("GroupSettingForm",array(
			"model" => $model
		));
	}

	function actionGroupSettingDelete($id){
		Group::model()->deleteByPk($id);
		$this->redirect(array("GroupSetting"));
	}

	function actionEmployee(){
		$model = new Employee();

		$this->render("Employee",array(
			"model" => $model
		));
	}

	function actionEmployeeView($id){
		$model = Employee::model()->findByPk($id);
		$this->render("EmployeeView",array(
			"model" => $model
		));
	}

}

?>