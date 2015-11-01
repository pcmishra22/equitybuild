<pre>
<?php
//print_r($noofagents);
?>
</pre>
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
						<h4 class="page-header">&Sigma; SUMMARY(ALL THE ACTIVITY)</h4>
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-6">Total Records :<b><a href="<?php echo base_url();?>admin/detailsreports/totalrecords" title="Click for details"><?php echo $totalrecord[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total f :<b><a href="<?php echo base_url();?>admin/detailsreports/totalf" title="Click for details"><?php echo $ftotal[0]['total'];?></a></b></div>
								</div>
                                <div class="row">
									<div class="col-xs-6">Total l :<b><a href="<?php echo base_url();?>admin/detailsreports/totall" title="Click for details"><?php echo $ltotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total p :<b><a href="<?php echo base_url();?>admin/detailsreports/totalp" title="Click for details"><?php echo $ptotal[0]['total'];?></a></b></div>
								</div>
                                <div class="row">
									<div class="col-xs-6">Total r :<b><a href="<?php echo base_url();?>admin/detailsreports/totalr" title="Click for details"><?php echo $rtotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total t :<b><a href="<?php echo base_url();?>admin/detailsreports/totalt" title="Click for details"><?php echo $ttotal[0]['total'];?></a></b></div>
								</div>
                                 <div class="row">
									<div class="col-xs-6">Total Pardot :<b><a href="<?php echo base_url();?>admin/detailsreports/totalpardot" title="Click for details"><?php echo $pardottotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total cf_leadid :<b><a href="<?php echo base_url();?>admin/detailsreports/totalcfleadid" title="Click for details"><?php echo $cf_leadidtotal[0]['total'];?></a></b></div>
								</div>
                                		<div class="row">
									<div class="col-xs-6">Total cf_new_lead :<b><a href="<?php echo base_url();?>admin/detailsreports/totalcfnewlead" title="Click for details"><?php echo $cf_new_leadtotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total tel :<b><a href="<?php echo base_url();?>admin/detailsreports/totaltel" title="Click for details"><?php echo $teltotal[0]['total'];?></a></b></div>
								</div>
                                <div class="row">
									<div class="col-xs-6">Total fname :<b><a href="<?php echo base_url();?>admin/detailsreports/totalfname" title="Click for details"><?php echo $fnametotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total lname :<b><a href="<?php echo base_url();?>admin/detailsreports/totallname" title="Click for details"><?php echo $lnametotal[0]['total'];?></a></b></div>
								</div>
                                <div class="row">
									<div class="col-xs-6">Total aID :<b><a href="<?php echo base_url();?>admin/detailsreports/totalaid" title="Click for details"><?php echo $aIDtotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total aFN :<b><a href="<?php echo base_url();?>admin/detailsreports/totalafn" title="Click for details"><?php echo $aFNtotal[0]['total'];?></a></b></div>
								</div>
                                 <div class="row">
									<div class="col-xs-6">Total aLN :<b><a href="<?php echo base_url();?>admin/detailsreports/totalaln" title="Click for details"><?php echo $aLNtotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total transfer_phone :<b><a href="<?php echo base_url();?>admin/detailsreports/totaltransferphone" title="Click for details"><?php echo $transfer_phonetotal[0]['total'];?></a></b></div>
								</div>
                                <div class="row">
									<div class="col-xs-6">Total lead_rec :<b><a href="<?php echo base_url();?>admin/detailsreports/totalleadrec" title="Click for details"><?php echo $lead_rectotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total lead_first_name :<b><a href="<?php echo base_url();?>admin/detailsreports/totalleadfirstname" title="Click for details"><?php echo $lead_first_nametotal[0]['total'];?></a></b></div>
								</div>
                                <div class="row">
									<div class="col-xs-6">Total lead_last_name :<b><a href="<?php echo base_url();?>admin/detailsreports/totalleadlastname" title="Click for details"><?php echo $lead_last_nametotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total lead_phone_number :<b><a href="<?php echo base_url();?>admin/detailsreports/totalleadphoneno" title="Click for details"><?php echo $lead_phone_numbertotal[0]['total'];?></a></b></div>
								</div>
                                <div class="row">
									<div class="col-xs-6">Total panel :<b><a href="<?php echo base_url();?>admin/detailsreports/totalpanel" title="Click for details"><?php echo $paneltotal[0]['total'];?></a></b></div>
									<div class="col-xs-6">Total notinterested :<b><a href="<?php echo base_url();?>admin/detailsreports/totalnotinterested" title="Click for details"><?php echo $notinterestedtotal[0]['total'];?></a></b></div>
								</div>
                                <div class="row">
									<div class="col-xs-6">Total start :
                                    	<b><a href="<?php echo base_url();?>admin/detailsreports/totalstart" title="Click for details"><?php echo $starttotal[0]['total'];?></a></b>
                                    </div>
									<div class="col-xs-6">&nbsp;</div>
								</div>
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
						<h4 class="page-header">&Sigma; SUMMARY (NO. OF AGENTS)</h4>
						<div class="row">
							<div class="col-xs-12">
                            <?php
							foreach($noofagents as $agents)
							{
							?>
								<div class="row">
									<div class="col-xs-4">aFN :<b><?php echo $agents['aFN'];?></b></div>
									<div class="col-xs-4">aLN :<b><?php echo $agents['aLN'];?></b></div>
                                    <div class="col-xs-4">Total :<b><?php echo $agents['total'];?></b></div>
								</div>
                                <?php
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
<!</div>
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
						<h4 class="page-header">&Sigma; SUMMARY (No. OF LEADS)</h4>
						<div class="row">
							<div class="col-xs-12">
            <?php
				foreach($noofleads as $leads)
				{
			?>
			<div class="row">
				<div class="col-xs-4">Lead Name :<b><?php echo $leads['fname'].' '.$leads['lname'];?></b></div>
                <div class="col-xs-4">Agent :<b><?php echo $leads['aFN'].' '.$leads['aLN'];?></b></div>
                <div class="col-xs-4">Total :<b><?php echo $leads['total'];?></b></div>
			</div>
            
			<?php
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
<!</div>

<!--End Dashboard 2 -->
