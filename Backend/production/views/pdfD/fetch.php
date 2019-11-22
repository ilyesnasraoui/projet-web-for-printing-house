<?php

//fetch.php

include('database_connection.php');

$column = array('id', 'mail',  'type', 'message','etat' , 'date');

$query = "select * FROM demande ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE id LIKE "%'.$_POST['search']['value'].'%" 
 OR mail LIKE "%'.$_POST['search']['value'].'%" 
 OR type LIKE "%'.$_POST['search']['value'].'%" 
 OR message LIKE "%'.$_POST['search']['value'].'%" 
 OR etat LIKE "%'.$_POST['search']['value'].'%" 
 OR date LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY date DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['id'];
 $sub_array[] = $row['mail'];
 $sub_array[] = $row['type'];
 $sub_array[] = $row['message'];
 $sub_array[] = $row['etat'];
 $sub_array[] = $row['date'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "select * FROM demande";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>