<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];
 
if(isset($_POST['search'])){
   $search = $_POST['search'];
   $jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
   $res = json_decode($jsearch,true);

   $list = $res['records'];
   
}else{
   $list = $data['records'];
}
?>

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

<h1> Product List </h1>


<div id="cover">
<br>
	<form method="POST" action="index.php">
 		 Search:<input type="text" name="search" placeholder="Enter Product Name">
			<input type="submit" name="submit" value="Search">
	</form>
</br>
</div>

<table id="list">
    <tr>
        <th>Product</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category</th>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
	   <td><a href="index.php?page=readone&id=<?php echo $result['id'];?>"><?php echo $result['name']; ?></a></td>
	   <td><a href="index.php?page=readone&id=<?php echo $result['id'];?>"><?php echo $result['description']; ?></a></td>
	   <td><a href="index.php?page=readone&id=<?php echo $result['id'];?>"><?php echo $result['price']; ?></a></td>
	   <td><a href="index.php?page=readone&id=<?php echo $result['id'];?>"><?php echo $result['category_name']; ?></a></td>
    </tr>
<?php
}
    ?>
</table>
