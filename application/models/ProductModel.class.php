<?php
// application/models/ProductModel.class.php
class ProductModel extends Model{

    public function getProducts(){

        $sql = "select * from $this->table";

        $products = $this->db->getAll($sql);

        return $products;

    }

}