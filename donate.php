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
          <div style="padding:20px;">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"
                            method="post" target="_top">
                            <input type="hidden" name="business" value="koti226932@gmail.com">
						    <input type="hidden" name="cmd" value="_xclick">
						    <input type="hidden" name="item_name" value="Become Member">
						    <input type="hidden" name="item_number" value="2">
						    <label>Enter Amount to Donate</label><br />
						    
						    <input type="text" name="amount" value="">
						    <input type="hidden" name="no_shipping" value="1">
						    <input type="hidden" name="currency_code" value="USD">
						    <input type="hidden" name="cancel_return" value="http://tekharsh.xyz/">
						    <input type="hidden" name="return" value="http://tekharsh.xyz/">  
						    <br /><br />
                            <input type="submit" name="pay_now" id="pay_now" Value="Pay Now">
                        </form>		
                        </div>
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