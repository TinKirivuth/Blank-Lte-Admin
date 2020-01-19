<?php
      include('layout/header.php');
    ?>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
	<?php
    	include('layout/header_bar.php');
    ?>

  	<!-- Left side column. contains the sidebar -->
  	<?php
    	include('layout/sidebar.php');
    ?>

  	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
	    <?php
        include('layout/blank.php');
      ?>
  	</div>
  	<!-- /.content-wrapper -->

  	<?php
    	include('layout/footer.php');
    ?>
 
	<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php
  include('layout/bottom_js.php');
?>
</body>
</html>
