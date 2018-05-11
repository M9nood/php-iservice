<div class="panel">
	<?php echo $this->beginContent("/home/toolbar",array('current'=>3));?>
	<?php echo $this->endContent();?>
	<div class="panel_body">
		<a href="<?php echo $this->createUrl("Home/DeviceForm")?>">
	    <div><?php echo CHtml::image("images/edit_add.png");?></div>
	    </a>
	    <?php 
	    	$this->widget('zii.widgets.grid.CGridView',array(
	    		'id' =>'repair-types-grid',
	    		'dataProvider'=> $model->search(),
	    		'columns'=>array(
	    			'device_code',
	    			'device_name',
	    			'device_price',
	    			'device_brand_name',
	    			array(
	    				'name' => 'device_buy_date',
	    				'value'=> '$data->device_buy_date',
	    				'htmlOptions'=>array(
	    					'align' => 'center',
	    					'width'=>'100px'
	    				)
	    			),
	    			array(
	    				'name' => 'device_garantee_expire_date',
	    				'value'=> '$data->device_garantee_expire_date',
	    				'htmlOptions'=>array(
	    					'align' => 'center',
	    					'width'=>'100px'
	    				)
	    			),
	    			array(
	    				'header' => 'edit',
	    				'class' => 'CLinkColumn',
	    				'imageUrl' => 'images/edit.png',
	    				'urlExpression' => 'Yii::app()->createUrl("Home/DeviceForm",array("id"=>$data->id))',
	    				'htmlOptions'=>array(
	    					'width' => '10%',
	    					'align' => 'center'
	    				)
	    			),
	    			array(
	    				'header' => 'delete',
	    				'class' => 'CLinkColumn',
	    				'imageUrl' => 'images/delete.png',
	    				'urlExpression' => 'Yii::app()->createUrl("Home/DeviceDelete",array("id"=>$data->id))',
	    				'htmlOptions'=>array(
	    					'width' => '10%',
	    					'align' => 'center',
	    					'onclick' => 'return confirm("ยืนยันการลบรายการ")'
	    				)
	    			)
	    		)
	    	));
	    ?>
	</div>
</div>