<?php
try {
	$sql = 'ALTER TABLE config MODIFY `value` TEXT;';
	DB::Prepare($sql, array(), DB::FETCH_TYPE_ROW);
} catch (Exception $exc) {
	echo $exc->getMessage();
}
?>