<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model {

    /**
     * retrieves data of all products
     * @param string | mixed $store_id is the unique id of the store used to get
     * the products link to that particular store
     *
     * @return array|false returns the products info as an array if the operation was successful
     * and returns false otherwise
     */
    public function getProducts(string $store_id) {
        $builder = $this->db->table("products");
        $builder->where('store_id',$store_id);
        $result = $builder->get();
        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        }else {
            return false;
        }
    }
}