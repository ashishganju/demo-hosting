<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){

  $_SESSION['start'] = time();

	 // taking now logged in time
	$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; 

	// ending a session in 1  minutes from the starting time

    header("location: index.php");
    exit;
}
?>











<?php include('include/sidebar.php');?>
            <?php include('include/header.php');?>
      
            <script type="text/javascript">

  function delet(id)
  {
    if(confirm("you want to delete ?"))
    {
      window.location.href='delete_property.php?x='+id;
    }
  }

</script>
    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
        <!-- #END# Left Sidebar -->
        <section class="content">
                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            <h2 style="text-align: center;">
                             Appointment Booking
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <tr>
                                            
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact No</th>
                                            <th>City</th>
                                            <th>Property Name</th>
                                            <th>Date and Time</th>
                                        </tr>
                                    </thead>
                                    <tfoot>


                                        <tr>
                                        <th>S.no</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact No</th>
                                            <th>City</th>
                                            <th>Property Name</th>
                                            <th>Date and Time</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i=1;
include'include/bookconfig.php';

$query=mysqli_query($con,"select * from book");
while($res=mysqli_fetch_array($query))
{

?>

                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            
                                            <td>
                                            <?php
                                              echo $res['name'];
                                             ?>
                                            </td>
                                            <td>
                                            <?php
                                              echo $res['email'];
                                             ?>
                                            </td>
                                            <td>
                                            <?php
                                              echo $res['contact'];
                                             ?>
                                            </td>
                                            <td>
                                            <?php
                                              echo $res['city'];
                                             ?>
                                            </td>
                                            <td>
                                            <?php
                                              echo $res['propertyname'];
                                             ?>
                                            </td>
                                            <td>
                                            <?php
                                              echo $res['date'];
                                             ?>
                                            </td>
                                            
                                           
   <!-- <a class='btn btn-success' href="dashboard.php?page=c_info&id=<?php
    // echo $id;
    ?>"><span class="fa fa-eye"></span></a>-->
  
    </td>
                                        </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
            <?php include'include/footer.php';?>


                                