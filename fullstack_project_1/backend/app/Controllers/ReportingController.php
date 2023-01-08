<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportingController extends BaseController
{
  public function staff_list()
  {
    $data['title'] = "Office Wise Staff List";
    $db = db_connect('sample_db');

    $builder = $db->table('offices');
    $data['offices'] = $builder->get()->getResultArray();

    // dd($data);
    return view('reportings/staff_lists', $data);
  }
  public function allstaff()
  {
    $officeCode = $this->request->getGet('offcode');

    $db = db_connect('sample_db');

    $builder = $db->table('employees, offices');
    $builder->select('CONCAT(employees.firstName, " ", employees.lastName) AS "employeeName"');
    $builder->select('employees.email, employees.jobTitle, offices.city, offices.country');
    $builder->where('offices.officeCode = employees.officeCode');
    $builder->where("offices.officeCode = {$officeCode}");

    $data = $builder->get()->getResultArray();

    // return view('reportings/staff_table', $data);

    $output = "";
    foreach ($data as $index => $emp) {
      $output .= "<tr>";
      $output .= "<td>" . $index + 1 . "</td>";
      $output .= "<td>" . $emp['employeeName'] . "</td>";
      $output .= "<td>" . $emp['email'] . "</td>";
      $output .= "<td>" . $emp['jobTitle'] . "</td>";
      $output .= "<td>" . $emp['city'] . "</td>";
      $output .= "<td>" . $emp['country'] . "</td>";
      $output .= "</tr>";
    }

    echo $output;
  }

  public function order_summary()
  {
    $data['title'] = "Order Summary";

    $db = db_connect('sample_db');

    $builder = $db->table('orders');
    $builder->select('DISTINCT(status)');
    $data['status'] = $builder->get()->getResultArray();

    $builder = $db->table('orders, customers');
    $builder->select('customerName, phone, city, orderNumber, orderDate, status');
    $builder->where('orders.customerNumber = customers.customerNumber');
    $data['orders'] = $builder->get()->getResultArray();

    return view('reportings/order_summary', $data);
  }
  public function make_order_summary()
  {
    $startdate = $this->request->getGet('startdate');
    $enddate = $this->request->getGet('enddate');
    $status = $this->request->getGet('status');


    $db = db_connect('sample_db');
    $builder = $db->table('orders, customers');
    $builder->select('customerName, phone, city, orderNumber, orderDate, status');
    $builder->where('orders.customerNumber = customers.customerNumber');
    $builder->where("orders.orderDate >= '{$startdate}'");
    $builder->where("orders.orderDate <= '{$enddate}'");
    if ($status != "") {
      $builder->where("orders.status = '{$status}'");
    }

    $data = $builder->get()->getResultArray();

    $output = '
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>SL No.</th>
            <th>Customer Name</th>
            <th>Phone</th>
            <th>City</th>
            <th>Order Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
    ';
    foreach ($data as $index => $order) {
      $output .= "<tr>";
      $output .= "<td>" . $index + 1 . "</td>";
      $output .= "<td>" . $order['customerName'] . "</td>";
      $output .= "<td>" . $order['phone'] . "</td>";
      $output .= "<td>" . $order['city'] . "</td>";
      $output .= "<td>" . $order['orderDate'] . "</td>";
      $output .= "<td>" . $order['status'] . "</td>";
      $output .= "</tr>";
    }
    $output .= '
      </tbody>
      <tfoot>
        <tr>
          <th>SL No.</th>
          <th>Customer Name</th>
          <th>Phone</th>
          <th>City</th>
          <th>Order Date</th>
          <th>Status</th>
        </tr>
      </tfoot>
    </table>
    ';

    echo $output;
  }
}
