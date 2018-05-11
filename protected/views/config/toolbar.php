<div class="panel_header">
	ตั้งค่าข้อมูลพื้นฐาน
</div>
<?php if(Yii::app()->session["employee_level"] == "admin"): ?>
<ul class="button-toolbar">
	<li <?php if($current==1) echo "class='current'";?>>
		 <a href="<?php echo $this->createUrl("Config/GroupSetting")?>">
	    <div><?php echo CHtml::image("images/course.png");?></div>
	    <div>โครงสร้างองค์กร</div>
	    </a>
	</li>
	<li <?php if($current==2) echo "class='current'";?>>
		 <a href="<?php echo $this->createUrl("Config/RepairType")?>">
	    <div><?php echo CHtml::image("images/config_type.png");?></div>
	    <div>ประเภทงานซ่อม</div>
	    </a>
	</li>
	<li <?php if($current==3) echo "class='current'";?>>
		 <a href="<?php echo $this->createUrl("Config/ProjectType")?>">
	    <div><?php echo CHtml::image("images/package.png");?></div>
	    <div>ประเภทงานโปรเจค</div>
	    </a>
	</li>
	<li <?php if($current==4) echo "class='current'";?>>
		 <a href="<?php echo $this->createUrl("Config/DeviceType")?>">
	    <div><?php echo CHtml::image("images/checkbox.png");?></div>
	    <div>ประเภทวัสดุ/อุปกรณ์</div>
	    </a>
	</li>
	<li <?php if($current==5) echo "class='current'";?>>
		 <a href="<?php echo $this->createUrl("Config/Employee")?>">
	    <div><?php echo CHtml::image("images/student_group.png");?></div>
	    <div>ผู้ใช้งานระบบ</div>
	    </a>
	</li>
</ul>
<?php endif;?>