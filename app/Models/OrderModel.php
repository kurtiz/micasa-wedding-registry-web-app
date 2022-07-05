<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model {

    /**
     * send orders to admin panel
     * @param $fields
     * @return int| string | false returns the true if the operation was successful
     * and returns false otherwise
     */
    public function createOrder($fields) {
        $builder = $this->db->table("orders");
        $builder->insert($fields);
        if ($this->db->affectedRows() == 1) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * send orders to admin panel
     * @param $fields
     * @return bool|false returns the true if the operation was successful
     * and returns false otherwise
     */
    public function sendOrderDetails($fields) {
        $builder = $this->db->table("order_details");
        $builder->insert($fields);
        if ($this->db->affectedRows() == 1) {
            $this->db->transStart();
            $this->db->query(
                'UPDATE `products` SET `quantity` = `quantity` - '.(float)$fields['quantity'].' WHERE `product_id` = "'.$fields['product_id'].'";'
            );
            $this->db->transComplete();
            return $this->db->transStatus();
        }else {
            return false;
        }
    }
}