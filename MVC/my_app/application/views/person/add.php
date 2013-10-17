
<?php
	$first_name = array(
		 'name'        => 'first_name',
		 'id'          => 'first_name'
		);
	$last_name = array(
		 'name'        => 'last_name',
		 'id'          => 'last_name'
		);
	$age = array(
		 'name'        => 'age',
		 'id'          => 'age'
		);
		
	echo form_open('person/add');
	echo form_label('First Name', 'first_name');
	echo form_input($first_name);
	echo form_label('Last Name', 'last_name');
	echo form_input($last_name);
	echo form_label('Age', 'age');
	echo form_input($age);
	echo form_submit('submit', 'Add');
	echo form_close();

