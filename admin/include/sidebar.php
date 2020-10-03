    
    <style>
		i{
			color:indigo;
		}
		
	 </style>

     <?php
     session_start();
$email=$_SESSION['email'];
include 'include/config.php';
$query=mysqli_query($con,"select * from admin where email='$email'");
$res1=mysqli_fetch_array($query);
@$name=$res1['name'];
     ?>

		<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name;?></div>
                    <div class="email"><?php echo $email;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">ADMIN PANEL</li>
                    <li>
                        <a href="registration.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>User Registered</span>
                        </a>
                    </li>

                    <li>
                        <a href="add_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Add Property</span>
                        </a>
                    </li>

                     <li>
                        <a href="view_property_image.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Add Property Images</span>
                        </a>
                    </li>


                    <li>
                        <a href="view_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>View Property</span>
                        </a>
                    </li>
                    <li>
                        <a href="subscribers.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>View subscribers</span>
                        </a>
                    </li>
                    <li>
                        <a href="contactt.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Contact With Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="interiormsg.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>View Interior Query</span>
                        </a>
                    </li>
                    <li>
                        <a href="bookonline.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Appointment Booking</span>
                        </a>
                    </li>
									                    
                    
                    
                    
                    <li>
                          
                            <li>
                            <a href="logout.php"><button type="button" class="btn btn-primary btn-lg btn-block"> Sign out  </button></a>
                           
                            </li>
                           
                        
                    </li>
             
                </ul>
            </div>
            
        </aside>