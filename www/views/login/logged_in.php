<?php include('views/header/header.php'); ?>

        <div style="position:absolute; top:20px; left:150px; background-color:transparent; width:600px; height:129px;">
	    <img src="views/img/vt-logo-transparent-1200x258.png" alt="Virginia Tech Engineering" style="width:600px; height:129px;"/>
	</div>
        <div style="position:absolute; top:0; right:100px; background-color:#fff; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25); width:250px; height:50px;">
            <div id="login_avatar" style="width:50px; height:50px; float:left; margin:0; background-image: url('<?php echo "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION['user_email'] ) ) ) . "?d=mm&s=50"; ?>')">
            </div>
            <div style="width: 110px; height: 50px; float:left; margin:0; font-family: 'Droid Sans', sans-serif; color:#666666; font-size:12px; border:0; height:100%; line-height: 50px; padding-left:20px; padding-right: 20px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                Hey, <?php echo $_SESSION['user_name']; ?>
            </div>
            <div class="login_logout">
                <a href="index.php?logout" style="width:49px; height:19px; padding-top: 31px; display:block; text-align: center; font-size:10px; font-family: 'Droid Sans', sans-serif; color:#666666; border:0; background: transparent; cursor: pointer;" >Logout</a>
           </div>
        </div>
	<div id="info" style="border:2px solid; border-radius:5px; position:absolute; top:220px; left:200px; background-color:#fff; width:300px; height:20px; font-family: 'Droid Sans', sans-serif;">
Current entries in accessList.txt
	</div>
	<pre id="currentAccess" style="border:4px solid; border-radius:10px; position:absolute; top:250px; left:200px; background-color:#fff; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25); width:300px; height:450px; font-family: 'Droid Sans'; overflow:auto; font-size:26pt; text-align:center">
	</pre>
	<div class="form" id="idEntry" style="position:absolute; right:300px; top:375px;">
		<form action="views/submit.php" method="post" style="border:2px solid; border-radius:5px; background-color:#fff; padding:10px">
		Student ID: <input type="number" name="StudentID" pattern="^(\d{9})$" title="9-digit ID number">
		<input type="submit" value="Submit">
		</form>
	</div>

<?php include('views/footer/footer.php'); ?>
