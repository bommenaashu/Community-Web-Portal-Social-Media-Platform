<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
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
			
	$query = $conn->query("select members.member_id , members.firstname , members.lastname , members.image from members where member_id!=$session_id");
	while($row = $query->fetch()){
	$friend_name = $row['firstname']." ".$row['lastname'];
	$friend_image = $row['image'];
	$id = $row['member_id'];
	?><div class="row">    
            <div class="col-md-2 text-center">
                <a href="userprofile.php?user=<?php echo $id;?>">
             <img  src="<?php echo $friend_image; ?>" style="width:100px;height:100px" class="img-circle"></a>
            </div>

				<div class="col-md-10">
				    <div class="pull-right">
				        
				        <?php 
				        $query1 = $conn->query("select * from friends where my_friend_id = $id and my_id  = $session_id");
			  $count1 = $query1->rowcount();
			  if ($count1 > 0){ ?>
			  <a href="delete_friend.php<?php echo '?id='.$id; ?>" class="btn btn-danger unfrndbtn"><i class="icon-remove"></i>  Unfriend </a>
			  
			  <?php }else{
		?>	<form method="post" action="add_friend.php">
				        <input type="hidden" name="my_friend_id" value="<?php echo $id; ?>">
			<button  class="btn btn-info unfrndbtn"><i class="icon-plus-sign"></i> Add as Friend</button>	  
			</form>
				    <?php }?>
				    </div>
					<div class="alert"><?php echo $friend_name; ?></div>
				</div>
            </div>
			<hr>
			<br><br>
	<?php } ?>		
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