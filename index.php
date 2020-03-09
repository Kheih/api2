<?php 
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page']: '';
?>
<!DOCTYPE html>
<html> 
    <head>
      <title>Endterm Activity</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

  <div id="container">  
      <div class="navbar">
        <a href="index.php?">Products</a>
        <a href="index.php?page=displaycat">Categories</a>
      <a href="index.php?page=create">Add Product</a>
      </div>

    <div class="content">         
      <?php 
        switch($load){
          case 'readone':
			 require_once('readOne.php');
				        break;
	case 'displaycat':
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
					  require_once('readAll.php');
					      break;
        }
    ?>
      </div>
    </body>
</html>
