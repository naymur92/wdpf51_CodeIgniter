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
    $db_con = \Config\Database::connect('sample_db');

    // // 1
    // $builder = $db_con->table('employees');
    // $builder->select('firstName, lastName, email');
    // $builder->where("jobTitle = 'Sales Rep'");


    // // 2
    // $builder = $db_con->table('employees');
    // $builder->select('firstName, lastName, email');
    // $builder->where("jobTitle = 'Sales Rep'");
    // $builder->where("reportsTo = 1143");

    // // Another Process
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

    // // Another Process
    // $builder = $db_con->table('orders');
    // $builder->select('customerName, phone, city, orderNumber, orderDate, status');
    // $builder->join('customers', 'orders.customerNumber = customers.customerNumber');


    // // 5
    // $builder = $db_con->table('orders, customers, orderdetails');
    // $builder->select('orders.orderNumber, customerName, phone, city, orderDate, status,');
    // $builder->where('orders.customerNumber = customers.customerNumber');
    // $builder->selectSum('orderdetails.priceEach', 'Total Price');
    // $builder->selectSum('orderdetails.quantityOrdered', 'Total Quantity')->groupBy('orderNumber');
    // $builder->where('orders.orderNumber = orderdetails.orderNumber');


    // // 6
    // $builder = $db_con->table('orders, orderdetails, customers');
    // $builder->select('customerName, city, orders.orderNumber, orderDate');
    // $builder->selectSum('orderdetails.priceEach', 'Total Price');
    // $builder->selectSum('orderdetails.quantityOrdered', 'Total Quantity');
    // $builder->where('orders.orderNumber = orderdetails.orderNumber');
    // $builder->where('orders.customerNumber = customers.customerNumber');
    // $builder->groupBy('orders.orderNumber');


    // // 7
    // $builder = $db_con->table('orders, customers');
    // $builder->select('customers.country');
    // $builder->selectCount('orders.orderNumber', 'Total Orders');
    // $builder->where('orders.customerNumber = customers.customerNumber');
    // $builder->where('orders.status = "Shipped"');
    // $builder->groupBy('customers.country');


    // // 8
    // $builder = $db_con->table('orders, customers');
    // $builder->select('customers.customerName');
    // $builder->selectCount('orders.orderNumber', 'Total Orders');
    // $builder->where('orders.status = "Shipped"');
    // $builder->where('orders.customerNumber = customers.customerNumber');
    // $builder->groupBy('customers.customerName');


    // // 9
    // $builder = $db_con->table('employees, customers, orders');
    // $builder->select('CONCAT(employees.firstName, " ", employees.lastName) AS "Employee Name"');
    // $builder->selectCount('orders.orderNumber', 'Total Sales');
    // $builder->where('orders.status = "Shipped"');
    // $builder->where('orders.customerNumber = customers.customerNumber');
    // $builder->where('customers.salesRepEmployeeNumber = employees.employeeNumber');
    // $builder->groupBy('employees.employeeNumber');
    // $builder->orderBy('employees.firstName');


    // // 10
    // $builder = $db_con->table('customers, orders');
    // $builder->select('customers.city');
    // $builder->selectCount('orders.orderNumber', 'Total Orders');
    // $builder->where('orders.status = "Shipped"');
    // $builder->where('orders.customerNumber = customers.customerNumber');
    // $builder->groupBy('customers.city');


    // 11
    $builder = $db_con->table('orders');
    $builder->select('CONCAT(year(orderDate), "-", month(orderDate)) as "Selected Month"');
    $builder->selectCount('orderNumber', "Total Orders");
    $builder->groupBy('year(orderDate), month(orderDate)');


    $raw = $builder->get();
    $data = $raw->getResultArray();

    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }
}
