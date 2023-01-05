<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class QueryBuilder extends BaseController
{
  public function index()
  {
    $db = \Config\Database::connect();

    ##########
    // $builder = $db->table('products');

    // $raw = $builder->get(1, 4);
    // $raw = $builder->get();
    // $raw = $builder->getWhere(['id' => 2]);
    // $raw = $builder->select('id, product_name, product_category')->get();
    // $raw = $builder->selectMax('product_price')->get();
    // $raw = $builder->selectMin('product_price')->get();
    // $raw = $builder->selectAvg('product_price')->get();
    // $raw = $builder->selectAvg('product_price')->get();
    // $raw = $builder->select('product_category')->selectSum('product_price')->groupBy('product_category')->get();
    // $raw = $builder->select('product_category')->selectSum('product_price')->groupBy('product_category')->get();

    ##############

    // Table joining
    // $builder = $db->table('products');
    // $builder->select('*');
    // $builder->join('categories', 'product_category=cat_id');

    // $builder = $db->table('products, categories')->where('product_category = cat_id');

    // Where condition
    // $builder = $db->table('products, categories')->where('product_category = cat_id and product_price > 100');

    // $builder = $db->table('products')->where('product_category = 3 and product_price > 100');

    $builder = $db->table('products');
    // $builder->where('product_category = 3');
    // $builder->where('product_price > 100');

    // $builder->where('product_price BETWEEN 100 AND 1500');

    $raw = $builder->get();
    $data = $raw->getResultArray();

    echo "<pre>";

    print_r($data);
    // return view('test', $data);
  }

  public function query()
  {
    $db_con = \Config\Database::connect('query_builder');

    // // 1
    // $builder = $db_con->table('employees');
    // $builder->select('firstName, lastName, email');
    // $builder->where("jobTitle = 'Sales Rep'");


    // // 2
    // $builder = $db_con->table('employees');
    // $builder->select('firstName, lastName, email');
    // $builder->where("jobTitle = 'Sales Rep'");
    // $builder->where("reportsTo = 1143");

    // $subquery = $db_con->table('employees')->select('firstName')->where('employeeNumber = 1143');
    // $builder = $db_con->table('employees');
    // $builder->select('firstName, lastName, email');
    // $builder->where("jobTitle = 'Sales Rep'");
    // $builder->where("reportsTo = 1143");
    // $builder->selectSubquery($subquery, 'ReportsTo');


    // // 3
    // $builder = $db_con->table('employees, offices');
    // $builder->select('firstName, lastName, email, city, country');
    // $builder->where('employees.officeCode = offices.officeCode');
    // $builder->where("offices.country = 'USA'");


    // // 4
    // $builder = $db_con->table('orders, customers');
    // $builder->select('customerName, phone, city, orderNumber, orderDate, status');
    // $builder->where('orders.customerNumber = customers.customerNumber');

    // $builder = $db_con->table('orders');
    // $builder->select('customerName, phone, city, orderNumber, orderDate, status');
    // $builder->join('customers', 'orders.customerNumber = customers.customerNumber');


    // // 5
    // $builder = $db_con->table('orders, customers, orderdetails');
    // $builder->select('orders.orderNumber, customerName, phone, city, orderDate, status,');
    // $builder->selectSum('orderdetails.priceEach')->groupBy('orderNumber');
    // $builder->selectSum('orderdetails.quantityOrdered')->groupBy('orderNumber');
    // $builder->where('orders.customerNumber = customers.customerNumber');
    // $builder->where('orders.orderNumber = orderdetails.orderNumber');

    $builder = $db_con->table('orderdetails');
    $builder->select('orderNumber')->selectSum('priceEach')->groupBy('orderNumber');


    // // 6
    // $builder = $db_con->table('orders, orderdetails, customers, products');
    // $builder->select('customerName, city, orders.orderNumber, orderDate, orderdetails.productCode, productName, quantityOrdered, priceEach, MSRP');
    // $builder->where('orders.orderNumber = orderdetails.orderNumber');
    // $builder->where('orders.customerNumber = customers.customerNumber');
    // $builder->where('orderdetails.productCode = products.productCode');


    // 7
    // $builder = $db_con->table();


    $raw = $builder->get();
    $data = $raw->getResultArray();

    echo "<pre>";
    print_r($data);
  }
}
