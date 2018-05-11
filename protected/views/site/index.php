<?php if(Yii::app()->session['employee_id'] == null):?>
<div class="panel" style="margin-left:15px">
	<?php echo CHtml::form(array("Member/CheckLogin"));?>
	<div class="panel_header">Login เข้าระบบ</div>
	<div class="panel_body">
		<div>username:</div>
		<div><input class="textbox" type="text" name="user_username"></div>
		<div>password:</div>
		<div><input class="textbox" type="password" name="user_password"></div>
		<div><input type="submit" class="button" value="Login Now"></div>
		<br><br>
		<div>
			<?php echo CHtml::link("ลืมรหัสผ่าน","/index.php/member/forgotPassword");?>
		</div>
	</div>
	<?php CHtml::endForm();?>
</div>

<?php endif;?>

