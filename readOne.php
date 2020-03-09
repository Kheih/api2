  
<?php
  $id = $_GET['id'];
  $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
  $data = json_decode($json,true);
  $details = array('records' => $data);
  $result = $details['records'];
?>
<h1>Product Details</h1>
<table class="reg1">
  <tr>
    <th>Name</th>
    <td> <?php echo $result['name']; ?> </td>
  </tr>
  <tr>
    <th>Price</th>
    <td><?php echo $result['price']; ?> </td>
 </tr>
 <tr>
   <th>Category</th>
   <td><?php echo $result['category_name']; ?> </td>
 </tr>
 <tr>
   <th>Description</th>
   <td><?php echo $result['description'];?> </td>
 </tr>
</table>
</div>
		<footer class="header">
			<a class="w3-button w3-round-large w3-teal w3-margin" href="index.php?page=update&id=<?php echo $id ?>">Update/Edit</a>
			<a class="w3-button w3-round-large w3-yellow w3-margin" href="pro_delete.php?id=<?php echo $id ?>">Delete/Trash</a>
		</footer>
	</div>
