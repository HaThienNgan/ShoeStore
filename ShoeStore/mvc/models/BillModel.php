<?php 
	/**
	 * 
	 */
	class BillModel extends BaseModel
	{
		
		const TABLE="hoadon";
		public function getAll($select=['*'],$orderBy=[])
		{
			$users=$this->all(self::TABLE,$select,$orderBy);
			return $users;
		}
		public function findById($id){
			return $this->find(self::TABLE, $id);
		}
		public function findByEmail($email){
			$table=self::TABLE;
			$sql="SELECT * FROM ${table} WHERE email='${email}'";
			$query=$this->excute($sql);
			$data=[];
			while($row=mysqli_fetch_assoc($query))
			{
				array_push($data,$row);
			}
			return $data;
		}
		public function store($data=[])
		{
			$this->create(self::TABLE,$data);
			
		}
		public function update($id,$data=[])
		{
			$this->updateNew(self::TABLE,$id, $data);
		}
		public function destroy($id)
		{
			$this->delete(self::TABLE,$id);
		}
		public function login($username, $password)
		{
			return $this->loginUser(self::TABLE, $username, $password);
		}
		public function findByFlat(){
			$table=self::TABLE;
			$sql="SELECT * FROM ${table} WHERE flat=0";
			$query=$this->excute($sql);
			$data= mysqli_fetch_assoc($query);
			return $data;
		}
		
	}
 ?>