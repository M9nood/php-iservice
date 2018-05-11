<div class="panel">
	<?php echo $this->beginContent("/config/toolbar",array('current'=>5));?>
	<?php echo $this->endContent();?>
	<div class="panel_body">
		<a class="button" href="<?php echo $this->createUrl("Member/Register")?>">+ เพิ่มผู้ใช้</a>
	    
	    <?php 
	    	$this->widget('zii.widgets.grid.CGridView',array(
	    		'id' =>'employee-grid',
	    		'dataProvider'=> $model->search(),
	    		'htmlOptions'=>array('width' => '80%'),
	    		'columns'=>array(
	    			array(
	    				'header' => 'code',
	    				'type' => 'html',
	    				'value'=>'CHtml::link($data->employee_code,array("Config/EmployeeView","id"=> $data->id))',
	    				'htmlOptions'=>array(
	    					'width' => '100px',
	    					'align' => 'center'
	    				)
	    			),
	    			'employee_fname',
	    			'employee_lname',
	    			'group.group_name',
	    			'employee_level',
	    			array(
	    				'header' => 'edit',
	    				'class' => 'CLinkColumn',
	    				'imageUrl' => 'images/edit.png',
	    				'urlExpression' => 'Yii::app()->createUrl("Member/Register",array("id"=>$data->id))',
	    				'htmlOptions'=>array(
	    					'width' => '10%',
	    					'align' => 'center'
	    				)
	    			),
	    			array(
	    				'header' => 'delete',
	    				'class' => 'CLinkColumn',
	    				'imageUrl' => 'images/delete.png',
	    				'urlExpression' => 'Yii::app()->createUrl("Member/EmployeeDelete",array("id"=>$data->id))',
	    				'htmlOptions'=>array(
	    					'width' => '10%',
	    					'align' => 'center',
	    					'onclick' => 'return confirm("ยืนยันการลบรายการ")'
	    				)
	    			)
	    		)
	    	))
	    ?>
	</div>
</div>