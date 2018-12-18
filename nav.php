<!--   Navigation Bar   -->
<nav>
	<!-- <ul>
		<li><a style="font-family: 'GrandHotel-Regular'" href="index.php">Home</a></li>	
		<li><a style="font-family: 'GrandHotel-Regular'" href="stockApp.php" data-toggle="tab">Stock Data Aggregation and Modeling</a></li>
		<li><a style="font-family: 'GrandHotel-Regular'" href="socialsport.php" data-toggle="tab">SocialSport</a></li>
		<li style="float:right"><a style="font-family: 'GrandHotel-Regular'" href="aboutMe.php" data-toggle="tab">About Me</a></li>
	</ul> -->



<!-- <div>
	<script type="text/javascript">
    	jQuery(document).ready(function ($) {
        	$('#tabs').tab();
    	});
	</script>    
</div> <!- container -->

<!-- <div>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</div> -->
<!--  --> 
     
    
        <?php
        print "<ul>";
        // This sets the current page to not be a link. Repeat this if block for
        //  each menu item 
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage" style="font-family: GrandHotel-Regular">Home</li>';
        } else {
            print '<li><a style="font-family: GrandHotel-Regular" href="index.php">Home</a></li>';
        }
        
        if ($path_parts['filename'] == "stockApp") {
            print '<li class="activePage" style="font-family: GrandHotel-Regular">Stock Data Aggregation and Modeling</li>';
        } else {
            print '<li><a style="font-family: GrandHotel-Regular" href="stockApp.php">Stock Data Aggregation and Modeling</a></li>';
        }
        
        
        if ($path_parts['filename'] == "psocialsport") {
            print '<li class="activePage" style="font-family: GrandHotel-Regular">SocialSport</li>';
        } else {
            print '<li><a style="font-family: GrandHotel-Regular" href="socialsport.php">SocialSport</a></li>';   
        }
        
        if ($path_parts['filename'] == "aboutMe") {
            print '<li class="activePage" style="font-family: GrandHotel-Regular">About Me</li>';
        } else {
            print '<li style="float:right"><a style="font-family: GrandHotel-Regular" href="aboutMe.php">About Me</a></li>';   
        }
        print "</ul>";
        ?>
    
</nav>

