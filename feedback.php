<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<?php 
  
  require_once("header.php");
?>
<script src="extlib/bootstrap-3.3.5-dist/js/dropdown.js" type="text/javascript" charset="utf-8"></script>
<script src="extlib/bootstrap-3.3.5-dist/js/collapse.js" type="text/javascript" charset="utf-8"></script>
<script src="extlib/bootstrap-3.3.5-dist/js/scrollspy.js" type="text/javascript" charset="utf-8"></script>
<script src="extlib/bootstrap-3.3.5-dist/js/tab.js" type="text/javascript" charset="utf-8"></script>

    <div>
        
     <!-- <div class="collapse navbar-collapse bs-example-js-navbar-collapse"> -->
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a id="drop1" href="#" class="dropdown-toggle" >Dropdown</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
              <li role="presentation" class="divider"></li>
            </ul>
          </li>
          </ul>
    <!-- </div> -->
    
<?php 
  
  require_once("footer.php")

?>

</body>
</html>