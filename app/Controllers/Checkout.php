<?php

namespace App\Controllers;

use App\Models\OrderModel;
use CodeIgniter\Controller;

class Checkout extends Controller
{
    public $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function index()
    {
        if ($this->request->getMethod() == "post") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            session()->set("cart-data", $_POST);

            $data['cartInfo'] = [
                "total" => $this->request->getVar("products_total"),
            ];
            return view("checkout", $data);
        } else {
            return redirect()->to(base_url());
        }
    }

    public function send() {
        if ($this->request->getMethod() == "post") {
            $posts = session()->get("cart-data");

            $order = [
                "order_id" => $this->request->getVar("reference",FILTER_SANITIZE_STRING),
                "store_id" => STORE_ID,
                "order_date" => date("d-m-Y"),
                "order_time" => date("H:i:s"),
                "order_full_date" => date("D jS F, Y  h:i a"),
                "total_amount" => $posts['products_total'],
                "customer_name" => $this->request->getVar("fname", FILTER_SANITIZE_STRING) . " " . $this->request->getVar("lname", FILTER_SANITIZE_STRING),
                "customer_email" => $this->request->getVar("email", FILTER_SANITIZE_EMAIL),
                "customer_phone_number" => $this->request->getVar("phone_number", FILTER_SANITIZE_STRING),
                "order_notes" => $this->request->getVar("order_notes", FILTER_SANITIZE_STRING)
            ];

            $sentOrder = $this->orderModel->createOrder($order);

            if ($sentOrder) {
                $postedOrder = [
                    "product_id" => $posts["product_id"],
                    "product" => $posts["product_name"],
                    "quantity" => $posts["product_quantity"],
                    "price" => $posts["product_price"],
                    "amount" => $posts["product_quantities"],
                ];
                for ($x=0; $x < count($postedOrder['product_id']); $x++) {
                    $orderDetails = [
                        "order_id" => $order['order_id'],
                        "store_id" => STORE_ID,
                        "product" => $postedOrder["product"][$x],
                        "product_id" => $postedOrder["product_id"][$x],
                        "quantity" => $postedOrder["quantity"][$x],
                        "price" => $postedOrder["price"][$x],
                        "amount" => $postedOrder["amount"][$x],
                        "date_sold" => $order['order_date'],
                        "time_sold" => $order['order_time']
                    ];

                    $queryResponse = $this->orderModel->sendOrderDetails($orderDetails);

                    if ($queryResponse) {
                        $data["message"] = "Row Successfully Added";
                    } else {
                        $data["message"] = "An Error Occurred";
                        return view("cart");
                    }
                }
                return redirect()->to(base_url()."/thankyou");
            } else {
                $data["message"] = "An Error Occurred";
                return redirect()->to(base_url()."/cart");
            }
        }

    }
}