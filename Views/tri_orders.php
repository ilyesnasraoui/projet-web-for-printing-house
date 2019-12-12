<?php
session_start();
  ?>
  <?php
  if (isset($_SESSION['pseudo'])){
     include "header2.php";}
     else
         { include "header.php";}
     ?>
<?php

require_once 'D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php';
$i= new fonctionC();
$orders=$i->getOrders($_SESSION["pseudo"]);
?>
<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 's_i_a_d');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM orders')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM orders ORDER BY OrderDate LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute();
	// Get the results...
	$result = $stmt->get_result();
	?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>s_i_a_d- order </title>
  	<link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  	<link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
			<!-- <table>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Join Date</th>
				</tr>
				<?php while ($row = $result->fetch_assoc()): ?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['joined']; ?></td>
				</tr>
				<?php endwhile; ?>
			</table> -->
      <main style="margin:10% auto;">
          <div style="background-color: white;" class="container">
              <div class="table-stats table-hover order-table ov-h">
      <table class="table ">
          <thead>
          <tr>
              <th class="serial">#</th>
              <th>Innovice Number</th>
              <th>Date</th>
              <th>Due Amount</th>
              <th>Status</th>
              <th>details</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $x=1;
          foreach ($orders as $o)
          {
              echo'
                  <tr>
                      <td class="serial">'.$x.'.</td>
                      <td> #'.$o["innoNumber"].' </td>
                      <td> '.$o["OrderDate"].' </td>
                      <td> '.$o["dueAmount"].' DT</span> </td>
                      <td>';
                          if($o["Status"]==1){echo '<span class="badge badge-complete">Complete</span>';}
                          else if($o["Status"]==0) {echo '<span class="badge badge-pending">pending</span>';}
                          else {echo '<span class="badge badge-danger">cancelled</span>';}
                          echo'
                      </td>
                      <td>
                          <form action="orderdetail.php" method="post">

                              <input type="hidden" name="inno" value="'.$o["innoNumber"].'">
                              <input type="hidden" name="add" value="'.$o["idAdd"].'">
                              <button type="submit"class="btn ">view details</button>
                          </form>

                      </td>
                  </tr>
              ';
              $x++;
          }
          ?>
          <a href="orders_tri.php">trier selon prix</a>
          </tbody>
      </table>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="tri_orders.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="tri_orders.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="pagination.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="pagination.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="tri_orders.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="tri_orders.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="tri_orders.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="tri_orders.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="tri_orders.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			<?php endif; ?>
		</body>
	</html>
	<?php
	$stmt->close();
}
?>
