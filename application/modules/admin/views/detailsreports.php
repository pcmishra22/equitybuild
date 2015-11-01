<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Report</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	<div class="col-xs-10 col-sm-6">
		<h3>HELLO, ADMIN !</h3>
	</div>
	<div class="clearfix visible-xs"></div>
</div>
<!--End Dashboard 1-->
<!--Start Dashboard 2-->
<div class="row-fluid">
<div id="dashboard_tabs" class="col-xs-12 col-sm-12">
		<!--Start Dashboard Tab 1-->
		<div id="dashboard-overview" class="row" style="visibility: visible; position: relative;">
			
			<div class="col-xs-12 col-md-12">
				<div id="ow-donut" class="row">
				<div class="col-xs-4">
						<div id="morris_donut_1" style="width:120px;height:20px;"></div>
					</div>
				<div id="ow-summary" class="row">
					<div class="col-xs-12">
						<h4 class="page-header">&Sigma; DETAILS OF <?php print strtoupper($type);?>&nbsp;&nbsp;[<?php print count($result);?>]</h4>
						<div class="row">
							<div class="col-xs-12">
                            <?php
							$cnt=1;
							if(count($result)>0)
							{
								foreach($result as $res)
								{
									
							?>
                                <div class="row">
									<div class="col-xs-4">f :<b><?php echo $res['f'];?></b></div>
                                    <div class="col-xs-4">l :<b><?php echo $res['l'];?></b></div>
                                    <div class="col-xs-4">p :<b><?php echo $res['p'];?></b></div>
                                    
                                    <div class="col-xs-4">r :<b><?php echo $res['r'];?></b></div>
									<div class="col-xs-4">t :<b><?php echo $res['t'];?></b></div>
									<div class="col-xs-4">pardot :<b><?php echo $res['pardot'];?></b></div>
                                    
                                    <div class="col-xs-4">cf_leadid :<b><?php echo $res['cf_leadid'];?></b></div>
                                    <div class="col-xs-4">cf_new_lead:<b><?php echo $res['cf_new_lead'];?></b></div>
                                    <div class="col-xs-4">tel :<b><?php echo $res['tel'];?></b></div>
                                    
                                    <div class="col-xs-4">fname :<b><?php echo $res['fname'];?></b></div>
                                    <div class="col-xs-4">lead_rec :<b><?php echo $res['lead_rec'];?></b></div>
                                    <div class="col-xs-4">lname :<b><?php echo $res['lname'];?></b></div>
                                    
                                    <div class="col-xs-4">aID :<b><?php echo $res['aID'];?></b></div>
                                    <div class="col-xs-4">aFN :<b><?php echo $res['aFN'];?></b></div>
									<div class="col-xs-4">aLN :<b><?php echo $res['aLN'];?></b></div>
                                    
                                   <div class="col-xs-4">transfer_phone :<b><?php echo $res['transfer_phone'];?></b></div>
                                   <div class="col-xs-4">lead_rec :<b><?php echo $res['lead_rec'];?></b></div>
                                   <div class="col-xs-4">lead_phone_number :<b><?php echo $res['lead_phone_number'];?></b></div>
                                    
                                    <div class="col-xs-4">panel :<b><?php echo $res['panel'];?></b></div>
                                    <div class="col-xs-4">notinterested :<b><?php echo $res['notinterested'];?></b></div>
									<div class="col-xs-4">start :<b><?php echo $res['start'];?></b></div>
								
                                </div>
                                <br/>
                                <div class="page-header"><strong>Record : <?php print $cnt?></strong></div>
                                <br/>
                                <?php
								$cnt++;
								}
								}
								?>
							</div>
						</div>
					</div>
				</div>
                
			</div>
		</div>
        </div>
	<div class="clearfix"></div>
</div>
</div>
<!--End Dashboard 2 -->
