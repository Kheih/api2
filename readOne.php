  
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
