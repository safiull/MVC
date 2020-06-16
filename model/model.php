<?php 
include 'DB.php';

class Model{
	public function getTeacherData(){
		$sql = 'SELECT * FROM teacher';
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(); 
	}
}