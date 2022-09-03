<?php 
	class ProductModel extends BaseModel
	{
		const TABLE="product";
		public function getAll($select=['*'], $orderBy=[])
		{
			$products=$this->all(self::TABLE, $select, $orderBy);
			return $products;
		}
		public function store($data=[]){
			$this->create(self::TABLE, $data);
		}
		public function update($id, $data=[]){
			$this->updateNew(self::TABLE, $id, $data);
		}
		public function destroy($id){
			$this->delete(self::TABLE, $id);
		}
		public function findById($id){
			return $this->find(self::TABLE, $id);
		}

	}
 ?>
