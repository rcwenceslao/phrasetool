


<?php
/*Add this function to every pages
function __autoload($class)
{
	require_once "classes/$class.php";
}


*/


/**
 * 
 */
class Phrasetool extends Db
{
	
	//Display data Sample (Table)
	public function sampleDisplay()
	{
		$sql = "";
		//$this is a reference of this class as well as Db
		$result = $this->connect()->query($sql);

		if($result->rowCount() > 0)
		{
			//
			while ($row = $result->fetch())
			{
				$data[] = $row;
			}
			return $data;
		}
	}

////Insert data sample
	public function sampleInsert($fields_header)
	{
		

		$implodeColumns = implode(', ',array_keys($fields_header));
		$implodePlaceholder = implode(", :", array_keys($fields_header));

		$sql = "INSERT INTO tb_chemical_header ($implodeColumns) VALUES (:".$implodePlaceholder.")";
		$stmt = $this->connect()->prepare($sql);

		foreach ($fields_header as $key => $value) {
			$stmt->bindValue(':'.$key,$value);
		}

		$stmtExec = $stmt->execute();

		if ($stmtExec) {
			header('Location: searchChemicals.php');
		}

	}

//Delete data sample
	public function deleteSample($id)
	{
		$sql = "DELETE FROM tb_chemical_header WHERE internal_no = :id";
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindValue(":id", $id);
		$stmt->execute();
	}

//Update data sample
	public function updateSample($fields_header,$id)
	{
		$st = "";
		$counter = 1;
		$total_fields = count($fields_header);
		foreach ($fields_header as $key => $value) {
			if($counter === $total_fields)
			{
				$set = "$key = :".$key;
				$st = $st.$set;
			}
			else
			{
				$set = "$key = :".$key.", ";
				$st = $st.$set;
				$counter++;
			}
		}

		$sql ="";
		$sql.="UPDATE tb_chemical_header SET ".$st;
		$sql.=" WHERE internal_no = ".$id;

		$stmt = $this->connect()->prepare($sql);

		foreach ($fields_header as $key => $value) {
			$stmt->bindValue(':'.$key, $value);
		
		}
		$stmtExec = $stmt->execute();
/*
		if ($stmtExec) {
			header('Location: searchChemicals.php');
		}
*/
	}




}