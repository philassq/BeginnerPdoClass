<?php 


 


class BeginnerCrud
{

	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbname = "beginner";
	private $connection;

	private $sql;
	private $query;
	private $rt;



	public function ConfigDb(){
		try {

			$this->connection = new PDO("mysql:host=localhost;dbname=beginner;charset=utf8", "root", "");

			return $this->connection;
			//echo "veritabanı bağlantısı başarılı";

		}

		catch (PDOExpception $e) {
			echo $e->getMessage();

		}


	}
	

	public function add($tableName,$title,$description,$status){


		$this->sql = "INSERT INTO news SET title = :title, description = :description, status = :status ";

		$this->query = $this->ConfigDb()->prepare($this->sql);

		$this->rt = $this->query->execute(array( 
			"title" => $title,
			"description" => $description,
			"status" => $status
		));

		if ($this->rt) {
			
			$this->rt = $this->connection->lastInsertId();
			return $this->rt;
		}

	}


	public function valueList($tableName){

		$this->sql = "SELECT * FROM " . $tableName;
		$this->query = $this->ConfigDb()->prepare($this->sql);
		$this->query->execute();

		while($this->rt = $this->query->fetchAll()) {
			return $this->rt;
		};
	}


	public function valueGet($tableName,$id){

		$this->sql = "SELECT * FROM " . $tableName. " WHERE id = ?";
		$this->query = $this->ConfigDb()->prepare($this->sql);
		$this->query->execute([$id]);

		$this->rt = $this->query->fetch();

		return $this->rt;

	}


	public function delete($tableName,$value){

		$this->sql = "DELETE FROM ".$tableName." WHERE id = ?";
		$this->query = $this->ConfigDb()->prepare($this->sql);

		$this->rt = $this->query->execute([$value]);

		if ($this->rt) {
			return $this->rt;
		}
	}



	public function editPost($tableName,$id,$title,$description){

		$this->sql = "UPDATE ". $tableName. " SET title = ? , description = ? where  id = ?";
		$this->query = $this->ConfigDb()->prepare($this->sql);

		$this->rt = $this->query->execute([$title,$description,$id]);
		
		if ($this->rt) {
			return $this->rt;

		}

	}

}

?>