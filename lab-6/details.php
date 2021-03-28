<?php

require_once("./Company.php");
require_once("./Employee.php");

$gces = new Company;
$gces->name = "Gandaki College of Engineering and Science";
$gces->address = "Lamachour, Pokhara";

array_push($gces->employees, 
  new Employee("bandana mainali","butwal"),
  new Employee("riha pradhan","Pokhara"),
  new Employee("rajina mainali","Kathmandu")
);

?>
<!DOCTYPE html>
<html >
<head>
  
  <title>OOP in PHP</title>
  <style>
    .content {
      max-width: 500px;
      margin: auto;
      background: white;
      padding: 10px;
    }

    table {
      border: 1px solid black;
      border-collapse: collapse;
    }

    td {
      padding: 10px;
    }
  </style>
</head>
<body>
  <div class="content">
    <h1><?= $gces->name ?></h1>
    <h3>Company name: </h3>
    <p><?= $gces->name ?></p>
    
    <h3>Company Address: </h3>
    <p><?= $gces->address ?></p>
    
    <h3>Employees count: </h3>
    <p><?= count($gces->employees) ?></p>
    
    <h3>Employees:</h3>   
    
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($gces->employees as $employee){ ?>
          <tr>
            <td><?= $employee->name ?></td>
            <td><?= $employee->address ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table> 
  </div> 
</body>
</html>