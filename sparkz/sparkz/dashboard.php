
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				
			<h1><marquee behavior=alternate direction="right" width="850"  scrollamount="2"><span style="color: green">Total Earnings till Date : Rs.<?php include 'actions/income-count.php'?>        </span>      |       <span style="color: red"> Pending Payment : Rs.<?php include 'actions/pendingpayment.php'?></span>

</marquee></h1>



			</ol>
		</div>

		
		<div class=" panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 ">
					<div class="panel panel-teal panel-widget">
						<div class="row no-padding"><em class="icon-line-awesome-bed fs-1 color-blue"></em>
							<div class="large"><?php include 'actions/room-count.php'?></div>
							<div class="">Total Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-blue panel-widget">
						<div class="row no-padding"><em class="icon-material-outline-bookmarks fs-1 color-orange"></em>
							<div class="large"><?php include 'actions/reserve-count.php'?></div>
							<div class="">Reservations</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-orange panel-widget">
						<div class="row no-padding"><em class="icon-feather-users fs-1 color-teal"></em>
							<div class="large"><?php include 'actions/staff-count.php'?></div>
							<div class="">Staffs</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-red panel-widget">
						<div class="row no-padding"><em class="icon-line-awesome-comments-o fs-1 color-red"></em>
							<div class="large"><?php include 'actions/complaints-count.php'?></div>
							<div class="">Complaints</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->


			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-teal panel-widget">
						<div class="row no-padding"><em class="icon-material-outline-reorder fs-1 color-red"></em>
							<div class="large"><?php include 'actions/bookedroom-count.php'?></div>
							<div class="">Booked Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-blue panel-widget">
						<div class="row no-padding"><em class="icon-line-awesome-check-circle fs-1 color-green"></em>
							<div class="large"><?php include 'actions/avrooms-count.php'?></div>
							<div class="">Available Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-orange panel-widget">
						<div class="row no-padding"><em class="icon-line-awesome-check-square-o fs-1 color-magg"></em>
							<div class="large"><?php include 'actions/checkedin-count.php'?></div>
							<div class="">Checked In</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3">
					<div class="panel panel-red panel-widget">
						<div class="row no-padding"><em class="icon-line-awesome-spinner fs-1 color-blue"></em>
							<div class="large"><?php include 'actions/pendingpay-count.php'?></div>
							<div class="">Total Pending Payments</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
<hr>
<div class="row">
        <ol class="breadcrumb">
        
            <li class="active"> <h1>Recent Reservations</h1></li>
        </ol>
    </div>

     <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
               
                <div class="panel-body">
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error on Delete !
                            </div>";
                    }
                    if (isset($_GET['success'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Successfully Delete !
                            </div>";
                    }
                    ?>
                    <table class="table table-responsive" cellspacing="0" width="100%"
                           id="rooms">
                        <thead>
                        <tr>
                            <th>Room No</th>
                            <th>Room Type</th>
                            <th>Booking Status</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $room_query = "SELECT * FROM room NATURAL JOIN room_type WHERE deleteStatus = 0";
                        $rooms_result = mysqli_query($connection, $room_query);
                        if (mysqli_num_rows($rooms_result) > 0) {
                            while ($rooms = mysqli_fetch_assoc($rooms_result)) { ?>
                                <tr>
                                    <td><?php echo $rooms['room_no'] ?></td>
                                    <td><?php echo $rooms['room_type'] ?></td>
                                    <td>
                                        <?php
                                        if ($rooms['status'] == 0) {
                                            echo '<a href="index.php?reservation&room_id=' . $rooms['room_id'] . '&room_type_id=' . $rooms['room_type_id'] . '" class=" btn-success badge" style="border-radius:0%">Book Room</a>';
                                        } else {
                                            echo '<a href="#" class="badge btn-danger" style="border-radius:0%">Booked</a>';
                                        }
                                        ?>


                                    <td>
                                        <?php
                                        if ($rooms['status'] == 1 && $rooms['check_in_status'] == 0) {
                                            echo '<button class="badge btn-warning" id="checkInRoom"  data-id="' . $rooms['room_id'] . '" data-toggle="modal" style="border-radius:0%" data-target="#checkIn">Check In</button>';
                                        } elseif ($rooms['status'] == 0) {
                                            echo '-';
                                        } else {

                                            echo '<a href="#" class="badge btn-danger" style="border-radius:0%">Checked In</a>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($rooms['status'] == 1 && $rooms['check_in_status'] == 1) {
                                            echo '<button class="badge btn-primary" style="border-radius:0%" id="checkOutRoom" data-id="' . $rooms['room_id'] . '">Check Out</button>';
                                        } elseif ($rooms['status'] == 0) {
                                            echo '-';
                                        }
                                        ?>
                                    </td>
                                   
                                </tr>
                            <?php }
                        } else {
                            echo "No Rooms";
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
			<div class="row">
				

				
				
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>
			</div><!--/.row-->
		</div>
		
	</div>	<!--/.main-->
	

		
</body>
</html>