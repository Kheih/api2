<?php 
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page']: '';
?>
<!DOCTYPE html>
<html> 
    <head>
      <title>Endterm Activity #1</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

  <div id="container">  
      <div class="navbar">
        <a href="index.php?page=product" id = "product">Products</a>
        <a href="index.php?page=categories" id = "category">Category</a>
        <a href="index.php?page=create" id = "create">Add Product</a>
      </div>

    <div id="content">         
      <?php 
        switch($page){
          case 'readone':
			 require_once('readOne.php');
				        break;
				case 'categories':
			      require_once('displayCat.php');
			          break;
        case 'create':
        		require_once('create.php');
        			  break;
        case 'delete':
        		require_once('delete.php');
        			  break;
        case 'update':
            require_once('update.php');
                break;
				default:
					  require_once('read_all.php');
					      break;
        }
    ?>
      </div>
  </div>    
    </body>
</html>
