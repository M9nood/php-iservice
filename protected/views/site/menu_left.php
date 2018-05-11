<div class="menu_icon">
    <a href="<?php echo Yii::app()->createUrl("Home/Index")?>">
    <div><?php echo CHtml::image("images/home.png");?></div>
    <div>หน้าหลัก</div>
    </a>
</div>
<?php if(Yii::app()->session["employee_level"]=="admin"):?>
<div class="menu_icon">
    <a href="<?php echo Yii::app()->createUrl("Config")?>">
    <div><?php echo CHtml::image("images/config.png");?></div>
    <div>ตั้งค่าพื้นฐาน</div>
    </a>
</div>
<div class="menu_icon">
    <a href="<?php echo Yii::app()->createUrl("Report/Repair")?>">
    <div><?php echo CHtml::image("images/report.png");?></div>
    <div>รายงาน</div>
    </a>
</div>
<?php ?>
<?php endif; ?>
<div class="menu_icon">
    <a href="<?php echo Yii::app()->createUrl("Member/Profile")?>">
    <div><?php echo CHtml::image("images/profile.png");?></div>
    <div>ข้อมูลส่วนตัว</div>
    </a>
</div>
<div class="menu_icon">
    <a href="<?php echo Yii::app()->createUrl("member/logout")?>">
    <div><?php echo CHtml::image("images/Logout.png");?></div>
    <div>ออกจากระบบ</div>
    </a>
</div>