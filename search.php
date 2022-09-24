<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
<?php $search = $_POST['search']; ?>
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					<?php include('heading.php'); ?>
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->
          <div class="row">    
            <br>
	<?php
	
	$query = $conn->query("SELECT * FROM `post` p LEFT JOIN members m on p.member_id = m.member_id where p.content like '%$search%'");
	$count = $query->rowcount();
	if ($count > 0){ 
	while($row = $query->fetch()){
	?>
            <div class="col-md-2 col-sm-3 text-center">
                <a href="userprofile.php?user=<?php echo $row['member_id']?>">
             <img  src="<?php echo $row['image']; ?>" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
             	<div class="alert"><?php echo $row['content']; ?></div>
              <div class="row">
                <div class="col-xs-9">
                  <h4><span class="label label-info"> <?php echo $row['date_posted']; ?></span></h4><h4>
                  <small style="font-family:courier,'new courier';" class="text-muted">Posted By:<a href="#" class="text-muted"><?php echo $row['firstname']." ".$row['lastname']; ?></a></small>
                  </h4></div>
                  <?php if($session_id == $row['member_id']){?>
                <div class="col-xs-3"><a href="delete_post.php<?php echo '?id='.$id; ?>" class="btn btn-danger delpost"><i class="icon-trash"></i> Delete</a></div>
                <?php }?>
              </div>
              <br><br>
            </div>
             
	<?php } }else{ ?> &nbsp;&nbsp;&nbsp;&nbsp; No Result Found.  <?php } ?>		
          </div>
          <hr>
        </div>
      </div>
   	</div><!--/col-12-->
  </div>
</div>
<?php include('footer.php'); ?>
    </body>
</html>