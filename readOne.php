<?php
  $id = $_GET['id'];
  $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
  $data = json_decode($json,true);
  $details = array('records' => $data);
  $result = $details['records'];
?>
<div id="container">
    <div class="navbar">
        <a href="index.php?page=product" id = "product">Products</a>
        <a href="index.php?page=categories" id = "category">Category</a>
        <a href="index.php?page=create" id = "create">Create</a>
    </div>
        <div id="content">
		
<h1>Product Details</h1>
	<table id="list">
	<tr>
                <th>Product</th>
		<th>Price</th>
                <th>Category</th>
		<th>Description</th>
        </tr>
								
	<tr>
		<td> <?php echo $result['name']; ?> </td>
		<td><?php echo $result['price']; ?> </td>
		<td><?php echo $result['category_name']; ?> </td>
		<td><?php echo $result['description'];?> </td>
	 </tr>
	</table>
<div class="addps">
  <ul>
    <li><a href="index.php?page=delete&id=<?php echo $id; ?>">Delete</a></li>
  </ul>
</div>
<div class="addps1">
  <ul>
    <li><a href="index.php?page=update&id=<?php echo $id; ?>">Update</a></li>
  </ul>
</div>
