<?php
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\helpers\Html;
?>

 <!--   View for Dental Self Insured     -->
 		
<style>
.table-backcolor > thead > tr > th {
    border-bottom: 1px solid #f7971e;
}
 tbody.body::before {
    content: '';
    display: block;
    height: 4px;
}
.border-bottom{ 
border-bottom: 2px solid #13a9cc;border-right: 2px solid #13a9cc;border-left: 2px solid #13a9cc;
}
.border-top{ 
border-top: 2px solid #13a9cc;border-right: 2px solid #13a9cc;border-left: 2px solid #13a9cc;
}
.border-right-left{ 
border-right: 2px solid #13a9cc;border-left: 2px solid #13a9cc;
}
.border-bottom-one{ 
border-bottom: 2px solid #f7971e;border-right: 2px solid #f7971e;border-left: 2px solid #f7971e;
}
.border-top-one{ 
border-top: 2px solid #f7971e;border-right: 2px solid #f7971e;border-left: 2px solid #f7971e;
}
.border-right-left-one{ 
border-right: 2px solid #f7971e;border-left: 2px solid #f7971e;
}
.padding-l-r-8{
	padding-left:8px;
	padding-right:8px;
}
.vertical-align-inherit{
	vertical-align: inherit !important;
}
.padding-left-4{
	padding-left:4px;
}	
.padding-right-4{
	padding-right:4px;
}
</style>


<!-- section start here-->

<section class="page-content padding-0">
	

		<!-- Dashboard -->
		<div class="dashboard-container">

				<!--  bread crums -->
			<div class="blue-breadcrumb col-md-12 padding-0">
				<a class="breadcrumb-back-btn" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<span class="">Clients &gt; <a class="color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/clients"><u>Client Name - Group Dental - Prior (2016)</u></a> &gt; Self Insured</span>

				</div>

			</div>
				<!-- end bread crums -->
		
		</div>
			<!-- page Content -->
		<div class="page-content col-md-12 pull-left width-100"  ng-app="DemoApp" ng-controller="DemoController" >
		
		<div class="">
			<div class="col-md-12 border-ddd widget padding-0">
			<div class="search-header padding-10">
			
				<ul class="nav nav-pills col-md-12 main-pills"  id="main_tab">
						<li class="col-md-2"></li>
					  <li href="#account_setup_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/account_setup_sel.png"  class="avatar cursor-pointer"
							alt="Alternative text to the image" id="main-anchor-1" onclick="addHasttag(1);">
							<p class="font-white margin-0">Account Setup</p></li>
					  <li href="#cost_projections_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/cost_projectionsl.png" class="avatar cursor-pointer"
							alt="Alternative text to the image" id="main-anchor-2" onclick="addHasttag(2);">
							<p class="font-white margin-0">Cost Projections</p></li>
					  <li href="#input_monthly_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/monthly_inputs.png" class="avatar cursor-pointer"
							alt="Alternative text to the image" id="main-anchor-3" onclick="addHasttag(3);">
							<p class="font-white margin-0">Input Monthly Financials</p></li>
					  <li href="#generate_reports_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/reports.png" class="avatar cursor-pointer"
							alt="Alternative text to the image" id="main-anchor-4" onclick="addHasttag(4);">
							<p class="font-white margin-0 ">Generate Reports</p></li>
						<li class="col-md-2"></li>
				</ul>
			
			</div>
			<div class="tab-content clearfix">
				<div class="tab-pane" id="account_setup_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard inner-block-ul">
							<li href="#planbasics" data-toggle="tab" class="active inner-block-li"  id="anchor-pb-1"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Plan Basics</span></a></li>
							<!--<li href="#planandrates" data-toggle="tab" class="inner-block-li"  id="anchor-pb-2"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Reinsurance Plans and Rates</span></a></li> -->
							<li href="#typestotrack" data-toggle="tab" class="inner-block-li" id="anchor-pb-3"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Claim Types to Track
								<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="Select the various types of claims you want to track on this plan, each month." data-original-title="Claim Types to Track"></i>
							</span></a></li>
							<li href="#itemtracking" data-toggle="tab" class="inner-block-li" id="anchor-pb-4"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text">Additional Financial Entries</span></a></li>
							<li href="#empcontribtion" data-toggle="tab" class="inner-block-li" id="anchor-pb-5"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text">Contributions & Enrollment</span></a></li>
						</ul>
					</div>
					
					<div class="col-md-12 padding-0">
					<div class="tab-content clearfix">
						<div class="tab-pane active " id="planbasics" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
														
					<div class="col-md-12 padding-0">
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Name of
																				the Plan <i class="fa fa-info-circle margin-left-5" title="Name of the Plan" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Name the plan in a way you would normally talk about the plan, such as Group PPO Plan" data-original-title="Bill Client Usage to"></i></label>
																			<input type="text" class="form-control placeholder-italics" value="" onkeypress="return planscreenname(event);"
																				>
																		</div>
							</div>
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Network <i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter the name of the network where employees are directed for care, such as Cigna, Blue Cross or Ameritas" data-original-title="Network"></i>
																			</label>
																			<input type="text" class="form-control placeholder-italics" value=""  onkeypress="return planscreenname(event);"
																				value="UHC Plus">
																		</div>
							</div>
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Plan Funding <i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Choose the plan funding for this plan as partially self insured, self insured, fully insured or level funded" data-original-title="Plan Funding"></i>
																			</label>
																			<input
																				type="text" class="form-control placeholder-italics"
																				value="Self Insured"  disabled>
																		
																		</div>
						
							</div>
							</div>
								<div class="col-md-12 padding-0">
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Administrative
																				Carrier/Vendor <i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter your TPAs name or the name of the carrier who is administrating the plans claims, such as United Healthcare or Cypress Benefit Administrators." data-original-title="Administrative Carrier/Vendor"></i>
																			</label>
																			<input type="text" class="form-control placeholder-italics" value=""  onkeypress="return planscreenname(event);"
																				>
																		</div>
							</div>
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">
																				Annual Consulting Fee<i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the total amount of commissions and other consulting fees your firm will receive on this plan for the plan year." data-original-title="Annual Consulting Fee"></i>
																			</label>
																				<div class="input-group">
																				<span class="input-group-addon">
																					<i class="fa fa-usd  color-black"></i>
																				</span>
																			<input type="text" class="form-control placeholder-italics price"
																				value="" >
																				</div>
																		</div>
							</div>
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Total Plan Budget
																			<i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the expected or budgeted amount of total plan costs on the plan for the plan year, including both claims and fixed costs.  Do not adjust this amount of employee premiums, COBRA contributions or other employee plan costs shares." data-original-title="Total Plan Budget"></i>
																			</label>
																			<div class="input-group">
																				<span class="input-group-addon">
																					<i class="fa fa-usd  color-black"></i>
																				</span>
																				<input class="form-control price" type="text" >
																			</div>
																		</div>
						
							</div>
							</div>
								<div class="col-md-12 padding-0">
<div class="col-md-8">
  <div class="form-group ">
																	<label class="form-control-label" for="l0">Plan Change Summary Details<i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the details of changes made to this plan from the prior plan year.  This section is intended to provide a quick log of changes for your records." data-original-title="Plan Change Summary Details"></i>
																	</label>
																		<textarea class="form-control placeholder-italics"  onkeypress="return planscreenname(event);"  rows="2"></textarea>
																</div>	
																</div>
																	<div class="col-md-4">
								<div class="form-group ">
																			<label class="form-control-label" for="l0">Claims Budget<i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the expected or budgeted amount of total claims on the plan for the plan year." data-original-title="Claims Budget"></i>
																			</label>
																			<div class="input-group">
																				<span class="input-group-addon">
																					<i class="fa fa-usd  color-black"></i>
																				</span>
																				<input class="form-control price" type="text" >
																			</div>
																			
																		</div>
							</div>
</div>	
									
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue" disabled onclick="previousButton(0);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(1);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						</div>
					<!--
						<div class="tab-pane" id="planandrates" role="tabpanel">
							<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<div class="col-md-12 padding-0 margin-bottom-20">
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Reinsurance
																				Carrier<span class="imp-red">*</span>
																			</label>
																			<input type="text" class="form-control placeholder-italics"
																				placeholder="e.g. Munich RE">
																		</div>
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Specific
																				Contract Type<span class="imp-red">*</span>
																			</label>
																			<select
																				class="form-control">
																				<option value="1">12/12</option>
																				<option value="2">12/15</option>
																				<option value="3">12/18</option>
																				<option value="4">12/24</option>
																				<option value="5">15/12</option>
																				<option value="6">18/12</option>
																				<option value="7">24/12</option>
																			</select>
																		</div>
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Specific
																				Lifetime Maximum<span class="imp-red">*</span>
																			</label>
																			<input type="text" class="form-control placeholder-italics"
																				placeholder="e.g. Unlimited">
																		</div>
							</div>
							
							<div class="col-md-4">
							
							
																		
							
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Reinsurance
																				Covered Benefits<span class="imp-red">*</span>
																			</label>
																				<select
																				class="form-control">
																				<option value="1">Medical</option>
																				<option value="2">Medical-Rx</option>
																				<option value="3">Medical-Rx-Dental</option>
																				<option value="4">Medical-Rx-Dental-Vision</option>
																				<option value="5">Others</option>
																			</select>
																		</div>
								<div class="form-group ">
																			<label class="form-control-label" for="l0">Select
																				Specific Lasers<span class="imp-red">*</span>
																			</label>
																				<select
																				class="form-control edited"
																				id="specific_lasers" id="form_control"
																				onchange="specificLasers();">
																				<option value="1">Yes</option>
																				<option value="2">No</option>

																			</select>
																		</div>										
																		
								<div class="form-group ">
																			<label class="form-control-label" for="l0">Laser
																				Details<span class="imp-red">*</span>
																			</label>
																			<input type="text" class="form-control placeholder-italics"
																				placeholder="e.g. $325,000 laser member # 225498">
																		</div>
																		
							</div>
							
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Specific
																				Deductible<span class="imp-red">*</span>
																			</label>
																				<input type="text" class="form-control placeholder-italics"
																				placeholder="e.g. $125,000">
																		</div>
							
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Aggregating Specific Contract<span class="imp-red">*</span>
																			</label>
																				<select
																				class="form-control"
																				id="specific_contract"
																				onchange="specificContract();">
																				<option value="1">Yes</option>
																				<option value="2">No</option>
																			</select>
																		</div>
								<div class="form-group ">
																			<label class="form-control-label" for="l0">Amount<span class="imp-red">*</span>
																			</label>
																				<input type="text" class="form-control placeholder-italics"
																			placeholder="e.g. $450,000">
																		</div>										
							</div>
							
							</div>
							<hr>
							<div class="col-md-12 padding-0"><div class="col-md-6">
																	<label> Select # of Premium Tiers </label>
																</div>
																<div class="col-md-6">

																	<select class="form-control">
																		<option value="1">1 tier</option>
																		<option value="2">2 tiers</option>
																		<option value="3">3 tiers</option>
																		<option value="4">4 tiers</option>
																		<option value="5">5 tiers</option>
																		<option value="5">6 tiers</option>
																	</select>
																</div></div>
																
								<div class="col-md-12 margin-bottom-10">
																<p class="box-head">Enter Reinsurance Rates</p>
															</div>
															<div class="col-md-12">



																<!-- div starting for Manage Clients grid 
																<div class="">
																	<div class="demo-container">
																		<div dx-data-grid="dataGridOptions"></div>
																	</div>
																</div>

																<!-- div end for Manage Clients grid 

															</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(1);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue pull-right" onclick="nextButton(2);">Save and Next &gt; </button>
							
								
								
								</div>
								</div>
						</div>
						-->
						<div class="tab-pane  " id="typestotrack" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
								<fieldset class="fieldset-box">

											<legend>Claim Types <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="Select the claim types you would like to track for this plan by entering in monthly claims amounts." data-original-title="Claim Types"></i></legend>	
						
							<div class="col-md-12">

																<div class="">
																	
																	<div class="md-checkbox col-md-12">
																		<div class="col-md-6">
																		
																		<label class="mt-checkbox mt-checkbox-outline">Dental Claims
																				<input type="checkbox">
																			<span></span>
																		</label>
																			
																		</div>
																	</div>
																	
																	<div class="md-checkbox col-md-12">
																		<div class="col-md-6">
																		<label class="mt-checkbox mt-checkbox-outline">HRA Claims
																				<input type="checkbox">
																			<span></span>
																		</label>
																			
																		</div>
																	</div>
																	
																		<div class="md-checkbox col-md-12">
																		<div class="col-md-6">
																		<label class="mt-checkbox mt-checkbox-outline">HSA Claims
																				<input type="checkbox">
																			<span></span>
																		</label>
																			
																		</div>
																	</div>

																	
																</div>
															</div>
															</fieldset>
							
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(2);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(3);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
						
						<div class="tab-pane  " id="itemtracking" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
								<div class="row"> 
							<div class="col-md-12">
							<div class="col-md-6">
								<fieldset class="fieldset-box">

											<legend>Add Claims Adjustments<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="Under self insured plans, often there are items that are essentially reimbursement of prior paid claims such as stop loss reimbursements or drug rebates.  By designating these claim amounts and entering them, we can adjust the claims tracked on the plan for the purpose of measuring a true cost and cost trend for each specific claim type.  Simply select the number of reimbursements you would like to track, enter the name for each reimbursement and finally select which claims that specific item should adjust.  Once completed, this will change the Monthly Financials input table to allow for the entering of these financial figures." data-original-title="Additional Claims Adjustments"></i></legend>	
						
							<div class="col-md-12 ">
							<div class="col-md-6 hide">
									<p class="box-head fontcolor-blue">Add Claims Adjustments</p>
								</div>
								<div class="col-md-6 hide" align="right">
									<span><i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="left" data-content="Click on Row Cell to Edit" data-original-title="Edit Cell"></i>
									</span>
								</div>
												
							<!--<div class="col-md-12 margin-bottom-10 padding-0">
												<div class="col-md-9">
													<label class="font-2rem"># of Claim Reimbursement Adjustments to Track
													 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Under self insured plans, often there are items that are essentially reimbursement of prior paid claims such as stop loss reimbursements or drug rebates.  By designating these claim amounts and entering them, we can adjust the claims tracked on the plan for the purpose of measuring a true cost and cost trend for each specific claim type.  Simply select the number of reimbursements you would like to track, enter the name for each reimbursement and finally select which claims that specific item should adjust.  Once completed, this will change the Monthly Financials input table to allow for the entering of these financial figures." data-original-title="Claim Types"></i>
													 </label>
												</div>
												<div class="col-md-3">
													<select class="form-control" id="reimbursement_track" onchange="addReimbursementtrack();">
														<option value="1">1 </option>
														<option selected value="2">2 </option>
														<option value="3">3 </option>
														<option value="4">4 </option>
														<option value="5">5 </option>
													</select>
												</div>
											</div>-->
												<div class="col-md-12   padding-bottom-10">
							
							<table class="table table-hover table-backcolor" id="editable_reimbursementtrack">
							  <thead>
                            <tr>
                                <th class="no-wrap" id="adjustment-column-1">Item Name</th>
                                <th class="no-wrap" id="adjustment-column-2">Adjustment to Impact Which Claim</th>
								   <th class="no-wrap" id="adjustment-column-3">Add New Row</th>
                               
                            </tr>
                            </thead>
                          
                            <tbody>
                               <!--   <tr>
                                    
                                       <td><input type="text" id="adjustment-1-1" class="form-control reinsurance-rates-td text-align-center" value="Drug Debates"></td>
								  <td> <select class="form-control reinsurance-rates-td" id="adjustment-2-1">
								 <option>Medical Claims</option>
								 <option>Dental Claims</option>
								 <option>Vision Claims</option>
									</select></td>
									<td></td>
                                   </tr>
								    <tr>
                                    
                                     <td><input type="text" id="adjustment-1-2" class="form-control reinsurance-rates-td text-align-center" value="Drug Debates"></td>
								  <td> <select class="form-control reinsurance-rates-td" id="adjustment-2-2">
								 <option>Medical Claims</option>
								 <option>Dental Claims</option>
								 <option>Vision Claims</option>
									</select></td>
									<td></td>
                                   </tr>
								    <tr>
                                    
                                       <td><input type="text" id="adjustment-1-3" class="form-control reinsurance-rates-td text-align-center" value="Drug Debates"></td>
								  <td> <select class="form-control reinsurance-rates-td" id="adjustment-2-3">
								 <option>Medical Claims</option>
								 <option>Dental Claims</option>
								 <option>Vision Claims</option>
									</select></td>
									<td></td>
                                   </tr>-->
                                  <tr>
                                   
                                       <td><input type="text" id="adjustment-1-1" class="form-control reinsurance-rates-td" onkeypress="return planscreenname(event);" value="Drug Debates"></td>
								  <td> <select class="form-control reinsurance-rates-td" id="adjustment-2-1">
									 <option>Medical Claims</option>
								 <option>Dental Claims</option>
								 <option>Vision Claims</option>
									</select></td>
									<td class="add_icon_button"><div class="add-icon cursor-pointer"><span class="button-add" onclick="addReimbursementtrack();"><u>Add</u></span></div></td>
                                   </tr>
                                
                            </tbody>
                        </table>
                        					
					
												</div>
							</div>
							</fieldset>
							
							<fieldset class="fieldset-box margin-top-10">

											<legend>Add Additional Cost Items<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="left" data-content="Additional cost items are other items on the plans that show as a cost to the plan, often referred to as fixed costs.  Some common items might be administrative fees or stop loss premiums.  Once completed, this will change the Monthly Financials input table to allow for the entering of these financial figures." data-original-title="Add Additional Cost Items"></i></legend>	
							<div class="col-md-12">
							<div class="col-md-6  hide">
									<p class="box-head fontcolor-blue">Add Additional Cost Items</p>
								</div>
								<div class="col-md-6  hide" align="right">
									<span><i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="left" data-content="Click on Row Cell to Edit" data-original-title="Edit Cell"></i>
									</span>
								</div>
											<div class="row">
										

                          <div class="col-md-12   padding-bottom-10">
                        
                          <table class="table table-hover table-backcolor" id="editable_cost_track">
                            <thead>
                                <tr>
                                   
                                    <th class="no-wrap" id="cost-column-1">Item Name</th>
                                     <th class="no-wrap" id="cost-column-2">Add New Row</th>
                                </tr>
                            </thead>
                            <tbody>
                             <!--   <tr>
                                    <td><input type="text" id="cost-1-1" class="form-control reinsurance-rates-td text-align-center" value="Adminstrative Fees"></td>
									<td></td>
                                  </tr>-->
                                 
                                  <tr>
                                    <td><input type="text" id="cost-1-1" class="form-control reinsurance-rates-td" onkeypress="return planscreenname(event);" value="Adminstrative Fees"></td>
									<td class="add_costtrack_button"><div class="add-icon cursor-pointer"><span class="button-add" onclick="addCosttrack();"><u>Add</u></span></div></td>
                                  </tr>
                            </tbody>
                        </table>
					
												</div>
												</div>
												</div>
							</fieldset>
										
	</div>
							
										<div class="col-md-6">	
											<fieldset class="fieldset-box">

											<legend>Employee & Member Contributions to Track <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="In order to show a true employer net cost, we must deduct the amount of costs paid by the employee and other covered members.  Select any employee contributions or other cost shares you would like to track on the plan.  Once completed, this will change the Monthly Financials input table to allow for the entering of these financial figures." data-original-title="Employee & Member contributions to Track"></i></legend>	
											<div class="col-md-12 padding-0">
											
												
												<div class="row">
											<div class="col-md-12 padding-top-10 ">
												<div class="col-md-12 hide">
													<label class="font-2rem " ><span class="fontcolor-blue">Employee & Member Contributions to
														Track</span>
														 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="In order to show a true employer net cost, we must deduct the amount of costs paid by the employee and other covered members.  Select any employee contributions or other cost shares you would like to track on the plan.  Once completed, this will change the Monthly Financials input table to allow for the entering of these financial figures." data-original-title="Employee & Member contributions to Track"></i>
														 </label>
												</div>

											</div>

											
												<div class="col-md-12">
												
													<div class="md-checkbox">
													
																		<label class="mt-checkbox mt-checkbox-outline"> Employee
															Contribution Totals by Month
																				<input type="checkbox" >
																			<span></span>
																		</label>
														
													</div>
													

													<div class="md-checkbox">
													<label class="mt-checkbox mt-checkbox-outline">COBRA
															Premiums
																				<input type="checkbox" >
																			<span></span>
																		</label>
														
													</div>
												

													<div class="md-checkbox">
													<label class="mt-checkbox mt-checkbox-outline">Member
															Copays, Coinsurance and Deductibles<input type="checkbox" >
																			<span></span>
																		</label>
														
													</div>
													
												</div>
											
											</div>
												
												</div>
							</fieldset>										
										</div>
										</div>
										</div>	
												
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(3);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(4);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
					
						
						<div class="tab-pane  " id="empcontribtion" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<div class="col-md-12">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
                               <div class="col-md-12 padding-0">
							   <div class="col-md-2">
												</div>
												<div class="col-md-12 form-group padding-0">
													<div class="col-md-5">
														<label># of Employee  Contribution Strategies
														 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the number of various employee contribution structures you would like to track on this plan.  Once selected, below you will see your selected number of tables where you can then enter in the number of contribution tiers for each structure, name the tiers and enter in monthly premium rates.  Finally, enter the average monthly enrollment for each structure." data-original-title="Plan Contribution Strategies"></i>
														 </label>
													</div>
													<div class="col-md-2">
														<select class="form-control" id="select_employee_contribution" onchange="employeeContribution();">
														<option value="">Select</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
												</div>

												
												</div>
												
												<div class="col-md-12 padding-0 margin-bottom-20" id="contribution_strategies">
												
										
                                            </div>
										 
											</div>
											</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(4);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(5);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
								
					</div>
					</div>
				</div>
				<div class="tab-pane" id="cost_projections_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#year_project_assumption" data-toggle="tab" class="active inner-block-li" id="anchor-pb-6"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text" title="Remainder Projection">Remainder Projection
							<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="In this section, you can enter in the details to be used for financial projections of future claims.  The system uses mid-point to mid-point underwriting to determine future claims.  The necessary components to perform these calculations is to determine how many prior months of claims you would like to use in your calculations, the credibility to apply to those claims and the annualized trend to use.  The system will then perform month by month calculations to estimate future claims based upon prior history." data-original-title="Remainder Projection"></i>
							</span></a></li>
							<li href="#claims_project_assumption" data-toggle="tab" class="inner-block-li" id="anchor-pb-7"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text" title="Renewal Projection">Renewal Projection
							 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="In this section, you can enter in the details to be used for financial projections of future claims.  The system uses mid-point to mid-point underwriting to determine future claims.  The necessary components to perform these calculations is to determine how many prior months of claims you would like to use in your calculations, the credibility to apply to those claims and the annualized trend to use.  The system will then perform month by month calculations to estimate future claims based upon prior history." data-original-title="Renewal Projection"></i>
							 </span></a></li>
							<li href="#cost_project_assumption" data-toggle="tab" class="inner-block-li" id="anchor-pb-8"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text" title="Renewal Cost Items">Renewal Cost Items
							<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="At renewal cost items are likely to change.  In order to illustrate this in the renewal projection reporting, please enter in the estimated percentage change over the current plan year, as well as any notes associated with your projection." data-original-title="Renewal Cost Items"></i>
							</span></a></li>
							<li href="#contribution_project_assumption" data-toggle="tab" class="inner-block-li" id="anchor-pb-9"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text" title="Renewal Contributions">Renewal Contributions</span></a></li>
						</ul>
					</div>
					
					<div class="col-md-12 padding-0">
					<div class="tab-content clearfix">
					
						<div class="tab-pane active " id="year_project_assumption" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
								
															<div class="col-md-12 padding-0">
															<div class="col-md-12">
																<div class="col-md-12 blue-breadcrumb padding-top-10 padding-left-20 margin-bottom-5">
																<p> Enter underwriting assumptions for calculations to determine costs for the Remainder of the Contract Year</p>
																</div>
																</div>
																<div class="col-md-6  margin-bottom-10">
															<fieldset class="fieldset-box">

										 
																	<div class="padding-5"> 
																	<img class="pull-left margin-right-10" width="22" src="/images/design/dental.png" alt="Alternative text to the image">
																	<b class="grid-head-text">Dental</b>
																	<a onclick="openPlanmodal('Dental');" class="pull-right cursor-pointer"><u>Add</u></a>
																	</div>
																	<div class="">
																	
																		<table class="table table-hover table-backcolor" id="editable_dental" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                    <th class="text-align-center" id="dentaltwo-column-1">Claim Month %</th>
                                     <th class="text-align-center" id="dentaltwo-column-2">Period Start Month</th>
									 <th class="text-align-center" id="dentaltwo-column-3">Period End Month</th>
									 <th class="text-align-center" id="dentaltwo-column-4">Credibility %</th>
									  <th class="text-align-center" id="dentaltwo-column-5">Medical Trend %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="dentaltwo-left-header-1">Period 1</td>
									  <td><input type="text" id="dentaltwo-2-1" class="form-control reinsurance-rates-td text-align-center" value="1" disabled></td>
									   <td><input type="text" id="dentaltwo-3-1" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
									    <td><input type="text" id="dentaltwo-4-1" class="form-control reinsurance-rates-td text-align-center" value="100%"></td>
										 <td><input type="text" id="dentaltwo-5-1" class="form-control reinsurance-rates-td text-align-center" value="7%"></td>
									     
                                  </tr>
                                 
                                   
                            </tbody>
                        </table>
						
						
																	</div>
																		</fieldset>
																</div>
																<div class="col-md-6">
																<fieldset class="fieldset-box">

										 
																	<div class="padding-5"> 
																	<img class="pull-left margin-right-10" width="22" src="/images/design/HRA.png" alt="Alternative text to the image">
																	<b class="grid-head-text">HRA</b>
																	<a onclick="openPlanmodal('HRA');" class="pull-right cursor-pointer"><u>Add</u></a>
																	</div>
																	<div class="">
																	
																	<table class="table table-hover table-backcolor" id="editable_hra" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                    <th class="text-align-center" id="hratwo-column-1">Claim Month %</th>
                                     <th class="text-align-center" id="hratwo-column-2">Period Start Month</th>
									 <th class="text-align-center" id="hratwo-column-3">Period End Month</th>
									 <th class="text-align-center" id="hratwo-column-4">Credibility %</th>
									  <th class="text-align-center" id="hratwo-column-5">Dental Trend %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="hratwo-left-header-1">Period 1</td>
									  <td><input type="text" id="hratwo-2-1" class="form-control reinsurance-rates-td text-align-center numbers" value="1" disabled></td>
									   <td><input type="text" id="hratwo-3-1" class="form-control reinsurance-rates-td text-align-center numbers" value="12"></td>
									    <td><input type="text" id="hratwo-4-1" class="form-control reinsurance-rates-td text-align-center numbers" value="100%"></td>
										 <td><input type="text" id="hratwo-5-1" class="form-control reinsurance-rates-td text-align-center numbers" value="11.4%"></td>
									     
                                  </tr>
                                 
                                   
                            </tbody>
                        </table>
						
																	</div>
																	</fieldset>
																</div>
															</div>

															
															
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(5);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(6);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
						</div>	
						
						<div class="tab-pane  " id="claims_project_assumption" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
															
															<div class="col-md-12 padding-0">
																	<div class="col-md-12">
																<div class="col-md-12 blue-breadcrumb padding-top-10 padding-left-20 margin-bottom-5">
																<p> Enter underwriting assumptions for calculations to determine costs for the Renewal Contract Year.</p>
																</div>
																</div>
																	<div class="col-md-6  margin-bottom-10">
															<fieldset class="fieldset-box">

										 
																	<div class="padding-5"> 
																	<img class="pull-left margin-right-10" width="22" src="/images/design/dental.png" alt="Alternative text to the image">
																	<b class="grid-head-text">Dental</b>
																	<a onclick="openPlanmodal('Dental');" class="pull-right cursor-pointer"><u>Add</u></a>
																	</div>
																	<div class="">
																	
																		<table class="table table-hover table-backcolor" id="editable_dental" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                    <th class="text-align-center" id="dentaltwo-column-1">Claim Month %</th>
                                     <th class="text-align-center" id="dentaltwo-column-2">Period Start Month</th>
									 <th class="text-align-center" id="dentaltwo-column-3">Period End Month</th>
									 <th class="text-align-center" id="dentaltwo-column-4">Credibility %</th>
									  <th class="text-align-center" id="dentaltwo-column-5">Dental Trend %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="dentaltwo-left-header-1">Period 1</td>
									  <td><input type="text" id="dentaltwo-2-1" class="form-control reinsurance-rates-td text-align-center numbers" value="1" disabled></td>
									   <td><input type="text" id="dentaltwo-3-1" class="form-control reinsurance-rates-td text-align-center numbers" value="12"></td>
									    <td><input type="text" id="dentaltwo-4-1" class="form-control reinsurance-rates-td text-align-center numbers" value="100%"></td>
										 <td><input type="text" id="dentaltwo-5-1" class="form-control reinsurance-rates-td text-align-center numbers" value="7%"></td>
									     
                                  </tr>
                                 
                                   
                            </tbody>
                        </table>
						
						
																	</div>
																		</fieldset>
																</div>
																<div class="col-md-6">
																<fieldset class="fieldset-box">

										 
																	<div class="padding-5"> 
																	<img class="pull-left margin-right-10" width="22" src="/images/design/HRA.png" alt="Alternative text to the image">
																	<b class="grid-head-text">HRA</b>
																	<a onclick="openPlanmodal('HRA');" class="pull-right cursor-pointer"><u>Add</u></a>
																	</div>
																	<div class="">
																	
																	<table class="table table-hover table-backcolor" id="editable_hra" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                    <th class="text-align-center" id="hratwo-column-1">Claim Month %</th>
                                     <th class="text-align-center" id="hratwo-column-2">Period Start Month</th>
									 <th class="text-align-center" id="hratwo-column-3">Period End Month</th>
									 <th class="text-align-center" id="hratwo-column-4">Credibility %</th>
									  <th class="text-align-center" id="hratwo-column-5">Dental Trend %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="hratwo-left-header-1">Period 1</td>
									  <td><input type="text" id="hratwo-2-1" class="form-control reinsurance-rates-td text-align-center numbers" value="1" disabled></td>
									   <td><input type="text" id="hratwo-3-1" class="form-control reinsurance-rates-td text-align-center numbers" value="12"></td>
									    <td><input type="text" id="hratwo-4-1" class="form-control reinsurance-rates-td text-align-center numbers" value="100%"></td>
										 <td><input type="text" id="hratwo-5-1" class="form-control reinsurance-rates-td text-align-center numbers" value="11.4%"></td>
									     
                                  </tr>
                                 
                                   
                            </tbody>
                        </table>
						
																	</div>
																	</fieldset>
																</div>
															</div>

															
															
															
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(6);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(7);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						
						<div class="tab-pane  " id="cost_project_assumption" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
																				
<div class="col-md-12">
<div class="col-md-1">
</div>
<div class="col-md-10">

															<div class="col-md-12 margin-top-10">
																<div class="col-md-6">
									<p class="box-head "><span class="fontcolor-blue">Renewal Cost Items</span><i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="left" data-content="Click on Row Cell to Edit" data-original-title="Edit Cell"></i></p>
									
								</div>
								<div class="col-md-6" align="right">
									<span>
									</span>
								</div>
									
			<table class="table table-hover table-backcolor" id="editable_renewal_cost_items" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                   
									<th class="text-align-center" id="costitems-column-1">Item Name</th>
									<th class="text-align-center" id="costitems-column-2">Estimated Renewal</th>
									<th class="text-align-center" id="costitems-column-3">Notes</th>
									<th class="text-align-center" id="costitems-column-4">Add New Item</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
									  <td id="costitems-left-header-1">Stop Loss Premiums</td>
									     <td><div class="input-group"><span class="input-group-addon"><i class="fa fa-usd  color-black"></i></span><input type="text" id="costitems-2-1" class="form-control reinsurance-rates-td price" value="4"></div></td>
									    <td><textarea type="text" id="costitems-3-1" class="form-control reinsurance-rates-td " onkeypress="return planscreenname(event);" value="Any Notes"></textarea></td>
									 <td class="add_costitems_button" align="center"><div class="add-icon cursor-pointer"><span class="" onclick="addCostitems();"><u>Add</u></span></div></td>
                                  </tr>
                                 
                                 <!--    <tr>
                                  
									    <td id="costitems-left-header-2">Administrative Fees</td>
									   <td><div class="input-group"><span class="input-group-addon"><i class="fa fa-usd  color-black"></i></span><input type="text" id="costitems-2-2" class="form-control reinsurance-rates-td text-align-center" value="4%"></div></td>
									    <td><input type="text" id="costitems-3-2" class="form-control reinsurance-rates-td text-align-center" value="Any Notes%"></td>
									     <td class="add_costitems_button" align="center"><div class="add-icon"><span class="" onclick="addCostitems();"><u>Add</u></span></div></td>
                                  </tr>-->
								   
                            </tbody>
                        </table>
					 
						
															<!--<div class="demo-container" id="checkbox-inline">
																			<div dx-data-grid="dataGridOptions16"></div>
																		</div>-->
															
															</div>
															</div>
															</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(7);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(8);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						<div class="tab-pane  " id="contribution_project_assumption" role="tabpanel">
								<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<div class="col-md-12">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
                               <div class="col-md-12 padding-0">
							   <div class="col-md-2">
												</div>
												<div class="col-md-12 form-group padding-0">
													<div class="col-md-5">
														<label># of Employee  Contribution Strategies
															 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the number of various employee contribution structures you would like to track on this plan.  Once selected, below you will see your selected number of tables where you can then enter in the number of contribution tiers for each structure, name the tiers and enter in monthly premium rates.  Finally, enter the average monthly enrollment for each structure." data-original-title="Plan Contribution Strategies"></i>
														 </label>
													</div>
													<div class="col-md-2">
														<select class="form-control" id="select_renewal_employee_contribution" onchange="employeerenewalContribution();">
														<option value="">Select</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
												</div>

												
												</div>
												
												<div class="col-md-12 padding-0 margin-bottom-20" id="renewal_contribution_strategies">
												</div>
												</div>
												</div>
						
							</div>
							</div>
					
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(8);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(9);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
					</div>
					</div>
					
				</div>
				<div class="tab-pane" id="input_monthly_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#monthly_financials" data-toggle="tab" class="active inner-block-li" id="anchor-pb-10"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Monthly Financials</span></a></li>
							<!--<li href="#large_claims" data-toggle="tab" class="inner-block-li" id="anchor-pb-11"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Large Claims</span></a></li>-->
							<li href="#network_performance" data-toggle="tab" class="inner-block-li" id="anchor-pb-12"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Network Performance</span></a></li>
							<!--<li href="#pharmacy_performance" data-toggle="tab" class="inner-block-li" id="anchor-pb-13"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text">Pharmacy Performance</span></a></li>-->
						</ul>
					</div>
					
					
					<div class="col-md-12 padding-0">
					<div class="tab-content clearfix">
					
						<div class="tab-pane  active" id="monthly_financials" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="margin-top-10 margin-bottom-10"  style="padding: 0px 20px 0px 20px;">
								<table class="table table-hover table-backcolor" id="editable_monthly_financials" style="table-layout:fixed;">
                          
							  <thead>
                            <tr >
                                <th class="width-12"></th>
                                <th class="column-1 no-wrap text-align-center" id="inputfinance-column-2">Jan-16</th>
                                <th class="column-2 no-wrap text-align-center" id="inputfinance-column-3">Feb-16</th>
                                <th class="column-3 no-wrap text-align-center" id="inputfinance-column-4">Mar-16</th>
                                <th class="column-4 no-wrap text-align-center " id="inputfinance-column-5">Apr-16</th>
                                <th class="column-5 no-wrap text-align-center " id="inputfinance-column-6">May-16</th>
                                <th class="column-6 no-wrap text-align-center " id="inputfinance-column-7">June-16</th>
                                <th class="column-7 no-wrap text-align-center " id="inputfinance-column-8">July-16</th>
                                <th class="column-8 no-wrap text-align-center " id="inputfinance-column-9">Aug-16</th>
                                <th class="column-9 no-wrap text-align-center " id="inputfinance-column-10">Sep-16</th>
                                <th class="column-10 no-wrap text-align-center " id="inputfinance-column-11">Oct-16</th>
                                <th class="column-11 no-wrap text-align-center " id="inputfinance-column-12">Nov-16</th>
                                <th class="column-12 no-wrap text-align-center " id="inputfinance-column-13">Dec-16</th>
                            </tr>
                            </thead>
                            <tbody> 
                                <tr class="border-top-one">
                                
									  <td id="inputfinance-left-header-1" class="vertical-align-inherit">Employee Enrollment</td>
									   <td><input type="text" id="inputfinance-2-1" class="form-control reinsurance-rates-td price text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-3-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-4-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-5-1" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-6-1" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-7-1" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-8-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-9-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-10-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-11-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-12-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									 <td><input type="text" id="inputfinance-13-1" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="200"></td>
                                  </tr>
                                 
                                     <tr class="border-bottom-one">
                                  
									   <td id="inputfinance-left-header-2" class="vertical-align-inherit">Member Enrollment</td>
									   <td><input type="text" id="inputfinance-2-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-3-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-4-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-5-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-6-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-7-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-8-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-9-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-10-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-11-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-12-2" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="200"></td>
									     <td><input type="text" id="inputfinance-13-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
                                  </tr>
								  </tbody>
								   
								       <tbody class="body"> 
								      <tr class="border-top border-bottom">
                               
									   <td id="inputfinance-left-header-3" class="vertical-align-inherit">Dental Claims</td>
									   <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-3" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-3" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-3" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-3" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                  </tr>
								  </tbody>
								  
								   <tbody class="body"> 
								      <tr class="border-top-one">
                                  
									    <td id="inputfinance-left-header-4" class="vertical-align-inherit">Claim Reimbursement</td>
									   <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-4" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-4" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-4" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-4" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-4" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-4" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-4" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-4" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-4" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-4" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-4" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-4" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                             
                                  </tr>
								     <tr class="border-bottom-one">
                                  
									  <td id="inputfinance-left-header-5" class="vertical-align-inherit">Adminstrative Fees</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-5" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-5" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-5" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-5" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-5" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-5" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-5" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                       
                                  </tr>
								  </tbody>
								   <tbody class="body"> 
								   <tr class="header-td back-gray color-white">
                                  
									  <td id="inputfinance-left-header-6">Gross Total</td>
									   <td id="inputfinance-2-6 text-align-center"  >$200.00</td>
									    <td id="inputfinance-3-6 text-align-center"  >$200.00</td>
										<td id="inputfinance-4-6 text-align-center"  >$200.00</td>
									    <td id="inputfinance-5-6 text-align-center"  >$200.00</td>
										<td id="inputfinance-6-6 text-align-center"  >$200.00</td>
									    <td id="inputfinance-7-6 text-align-center" >$200.00</td>
										<td id="inputfinance-8-6 text-align-center" >$200.00</td>
									    <td id="inputfinance-9-6 text-align-center"  >$200.00</td>
										<td id="inputfinance-10-6 text-align-center" >$200.00</td>
									    <td id="inputfinance-11-6 text-align-center"  >$200.00</td>
										<td id="inputfinance-12-6 text-align-center" >$200.00</td>
									     <td id="inputfinance-13-6 text-align-center" >$200.00</td>
                                  </tr>
								 </tbody>
								 
							
							   <tbody class="body"> 
							
							 <tr class="border-top">
                                  
									  <td id="inputfinance-left-header-7" class="vertical-align-inherit">Employee Contribution</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-7" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-7" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-7" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-7" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-7" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-7" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-7" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-7" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-7" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-7" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-7" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-7" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
								  <tr class="border-right-left">
                                  
									  <td id="inputfinance-left-header-8" class="vertical-align-inherit">Cobra Premium</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-8" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-8" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-8" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-8" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-8" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-8" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
								  <tr class="border-bottom">
                                  
									  <td id="inputfinance-left-header-9" class="vertical-align-inherit">Member Copays,Coinsurance and Deductibles</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-9" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-9" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-9" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
                                  </tbody>
                                  
                                
                                  <tbody class="body">
                                  
                              <tr class="header-td back-gray color-white">
                               <td class="header-td" id="inputfinance-left-header-20">Net Total</td>
                               <td class="column-1 column-td text-align-center"  id="inputfinance-2-20" >$200.00</td>
                                <td class="column-2 column-td text-align-center"  id="inputfinance-3-20" >$50.00</td>
                                <td class="column-3 column-td text-align-center"  id="inputfinance-4-20" >$250.00</td>
                                <td class="column-4 column-td text-align-center"  id="inputfinance-5-20" >$250.00</td>
                                <td class="column-5 column-td text-align-center"  id="inputfinance-6-20" >$250.00</td>
                                <td class="column-6 column-td text-align-center"  id="inputfinance-7-20" >$200.00</td>
                                <td class="column-7 column-td text-align-center"  id="inputfinance-8-20" >$200.00</td>
                                <td class="column-8 column-td text-align-center"  id="inputfinance-9-20" >$225.00</td>
                                <td class="column-9 column-td text-align-center"  id="inputfinance-10-20" >$200.00</td>
                                <td class="column-10 column-td text-align-center"  id="inputfinance-11-20" >$222.00</td>
                                <td class="column-11 column-td text-align-center"  id="inputfinance-12-20" >$222.00</td>
                                <td class="column-12 column-td text-align-center"  id="inputfinance-13-20" >$222.00</td>
                            </tr>
                            </tbody>
							
							  <tbody class="body">
								<tr class="border-top-one">
                                  
									  <td id="inputfinance-left-header-10" class="vertical-align-inherit">Expected Monthly Claims</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-10" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-10" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
								 <tr class="border-bottom-one">
                                  
									  <td id="inputfinance-left-header-11" class="vertical-align-inherit">Maximum Monthly Claims</td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-11" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-11" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
                                  </tbody>
                        </table>
							
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(9);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(10);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						
						
						<div class="tab-pane  " id="network_performance" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
						<div class="col-md-12">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
							<fieldset class="fieldset-box">

											<legend>Network performance</legend>
							<div class="col-md-12">
							
							<div class="row">
							<div class="col-md-12 col-xs-12 padding-top-10 padding-bottom-10">
							<div class="col-md-3 col-xs-3 padding-left-8"><label class="margin-top-10"> Plan Year Data As of :</label></div>
								<div class="col-md-4 col-xs-7">
								<select class="form-control" id="claim_value">
								<option value="">January 2017</option>
								<option value="">February 2017</option>
								<option value="">March 2017</option></select>
								</div>
								<div class="col-md-6 col-xs-2 margin-top-10" align="right">
								
								</div>
								</div>
								</div>
								
								
								
								<table class="table table-hover table-backcolor" id="editable_cost_items" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                   
									<th class="text-align-center" id="network-column-1">Utilization</th>
									<th class="text-align-center" id="network-column-2">Amount</th>
								 
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
									  <td id="network-left-header-1" class=" ">Network Utilization %</td>
									   <td><input type="text" id="network-2-1" class="form-control reinsurance-rates-td   numbers" value="95%"></td>
                                  </tr>
                                 
                                   <tr>
									  <td id="network-left-header-2" class=" ">Total Sumitted Charges</td>
									   <td><input type="text" id="network-2-2" class="form-control reinsurance-rates-td   numbers" value="1000"></td>
                                  </tr>
								  
								  <tr>
									  <td id="network-left-header-3" class=" ">Total Allowed Charges</td>
									   <td><input type="text" id="network-2-3" class="form-control reinsurance-rates-td   numbers" value="25000"></td>
                                  </tr>
								  <tr>
									  <td id="network-left-header-4" class=" ">Total Savings</td>
									   <td><input type="text" id="network-2-4" class="form-control reinsurance-rates-td   numbers" value="150000"></td>
                                  </tr>
								  <tr>
									  <td id="network-left-header-5" class=" ">Discount %</td>
									   <td><input type="text" id="network-2-5" class="form-control reinsurance-rates-td   numbers" value="34.7%"></td>
                                  </tr>
								   
                            </tbody>
                        </table>
					 
					 
					 
						
						
						<!--	<div class="demo-container " style="margin-top: 10px;">
																<div dx-data-grid="dataGridOptionsnetworkperfomance"></div>
															</div>-->
															
								</div>
								</fieldset>
							
							</div>
							<div class="col-md-2">
							</div>
							
							</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(10);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(11);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=2">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
				

					</div>
								</div>
						
				</div>
				<div class="tab-pane" id="generate_reports_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#" data-toggle="tab" class="active inner-block-li"><a href="#" data-toggle="tab"><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Reports</span></a></li>
						</ul>
						</div>
						<div class="border-top-bottom-ddd col-md-12 padding-0">
						<div class="container margin-top-10 margin-bottom-10">
						<?php
								
$resultData = [
    array("sno"=>"1","reporttitle"=>"Claims Trend Report","reportdescription"=>"Claims Trend Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
    array("sno"=>"2","reporttitle"=>"Plan Year Claims Only Report","reportdescription"=>"Plan Year Claims Only Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	 array("sno"=>"3","reporttitle"=>"Plan Year Total Report","reportdescription"=>"Plan Year Total Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	  array("sno"=>"4","reporttitle"=>"Budget Report","reportdescription"=>"Budget Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"5","reporttitle"=>"Year Over Year Report","reportdescription"=>"Year Over Year Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"6","reporttitle"=>"Remainder Year Project Report","reportdescription"=>"Remainder Year Project Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"7","reporttitle"=>"Med Rx-Renewal Project Report","reportdescription"=>"Med Rx-Renewal Project Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"8","reporttitle"=>"Stop Loss Analyser Report","reportdescription"=>"Stop Loss Analyser Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"9","reporttitle"=>"50 % of Spec Report","reportdescription"=>"50 % of Spec Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	 ];

function filter_2($item) {
    $mailfilter = Yii::$app->request->getQueryParam('website', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['website'], $mailfilter) != false) {
            return true;
            
        } else {

            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filter_2');
/*
$userfilter = Yii::$app->request->getQueryParam('user', '');
$usertypefilter = Yii::$app->request->getQueryParam('usertype', '');
$mailfilter = Yii::$app->request->getQueryParam('website', '');
$namefilter = Yii::$app->request->getQueryParam('helppressed', '');
$statusfilter = Yii::$app->request->getQueryParam('filterstatus', '');

$searchModel = ['user' =>$userfilter  ,'usertype' =>$usertypefilter  ,'website' => $mailfilter, 'help' => $namefilter,'contact'=>$statusfilter];
*/
$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'reporttitle', 'reportdescription','dataavailable','generatedon' ],
        ],
]);

$gridColumns = [
 [
            "attribute" => "sno",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' =>'sno',
			'format'=>'raw',
            'label' => 'Sl. No',
            ],
            [
            "attribute" => "reporttitle",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#" data-toggle="modal" class="color-blue pull-left"><u>'.$model['reporttitle'].'</u></a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Report Title',
            ],
     [
            "attribute" => "reportdescription",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#" data-toggle="modal" class="color-black pull-left">'.$model['reportdescription'].'</a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Report Description',
            ],
			    [
            "attribute" => "dataavailable",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#" data-toggle="modal" class="color-black pull-left">'.$model['dataavailable'].'</a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Data Available For Report Generate ?',
            ],
			    [
            "attribute" => "generatedon",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#" data-toggle="modal" class="color-black pull-left">'.$model['generatedon'].'</a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Report Generated On',
            ],
			
			 [
            "attribute" => "actions",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
			switch($model['sno']){
				
				case 1:
				$value = '<a id="modal-claim_report" href="#claims_trend_report_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 2:
				$value = '<a id="modal-plan_year_claim" href="#plan_year_claim_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 3:
				$value = '<a id="modal-plan_year_total" href="#total_plan_year_claim_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 4:
				$value = '<a id="modal-buget_report" href="#buget_report_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 5:
				$value = '<a id="modal-year_over_year" href="#year_over_year_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 6:
				$value = '<a id="modal-remiander_year" href="#remiander_year_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 7:
				$value = '<a id="modal-med_rx" href="#renewal_med_rx_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 8:
				$value = '<a id="modal-stop_loss" href="#stop_loss_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 9:
				$value = '<a id="modal-spec_report" href="#spec_report_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				 
				
				
			}
			
					 $user_name = $value.'<i class="fa fa-download padding-5" data-toggle="tooltip" data-placement="Top" title="Download PDF"  style="color:#27a4b0"></i>
					 <i class="fa fa-envelope padding-5" aria-hidden="true" data-toggle="tooltip" data-placement="Top" title="eMail Report" style="color:#27a4b0"></i>
					 <i class="fa fa-exchange padding-5" aria-hidden="true" data-toggle="tooltip" data-placement="Top" title="Recereate Report"  style=" color:#27a4b0"></i>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Actions',
'width'=>'130px',
            ],
			
/*[
'attribute' => 'date',
'format'=>'date',
'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
'filterWidgetOptions' => [
'presetDropdown' => true,
'pluginOptions' => [
'format' => 'YYYY-MM-DD',
'separator' => ' TO ',
'opens'=>'left',
] ,
'pluginEvents' => [
"apply.daterangepicker" => "function() { apply_filter('date') }",
]
],
],*/
			];
							echo GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => $gridColumns,
		'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
		/* 'beforeHeader'=>[
		 [
'columns'=>[
['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']],
['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']],
['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']],
],
'options'=>['class'=>'skip-export'] // remove this row from export
]
],*/
		'toolbar' =>  [
		/*
		 '{export}',
'{toggleData}'*/
		],
		'pjax' => true,
		'bordered' => true,
		'striped' => true,
		'condensed' => false,
		'responsive' => true,
		'hover' => true,


		// 'floatHeader' => true,
		// 'floatHeaderOptions' => ['scrollingTop' => true],
		'showPageSummary' => false,
		'panel' => [
		'heading'=>false,
		'type' => GridView::TYPE_PRIMARY,
		'footer' => false,
		],
		]);
															
															
															?>
					</div>
					
					
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
			<!--end page Content -->
	</section>
	
	<!-- section end here-->	

	
	
		
<	<script type="text/javascript"
			src="<?php //echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/firm/dentalselfplandetails.js"></script>
			
				<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/reports/cliams-trend-report.js"></script>
	 
	
<div class="modal fade" id="create_claim" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Create New Claim
							</h4>
						</div>
						<div class="modal-body row">
							<form>
 <div class="col-md-12">
						   <div class="col-md-6">
						    <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Member Type
															Locations *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"  onkeypress="return planscreenname(event);" 
															>
													</div>
												</div>
						    
					
						   </div>
						   <div class="col-md-6">
						    	<div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Enrollment Status *</label>
													</div>
													<div class="col-md-8 form-group ">
														<select class="form-control">
															<option selected>Active</option>
															<option>Inactive</option>
															
														</select>
													</div>
												</div>
						
						   </div>
						   </div>
						   
									

  <div class="col-md-12">
						   <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Age *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control numbers" 
															>
													</div>
												</div>
						   </div>
						   <div class="col-md-6">
						   <div class="row">

													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Gender *</label>
													</div>
													<div class="col-md-8 form-group ">
														<select class="form-control">
															<option selected>Male</option>
															<option>Female</option>
															<option>Other</option>
														</select>
													</div>

												 

												</div>
						   </div>
						   </div>	
						   
						    <div class="col-md-12">
						   <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Plan Claims *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"   onkeypress="return planscreenname(event);" 
															>
													</div>
												</div>
						   </div>
						   <div class="col-md-6">
						   <div class="row">

													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Condition *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"  onkeypress="return planscreenname(event);" 
															>
													</div>

												 

												</div>
						   </div>
						   </div>
						   
						     <div class="col-md-12">
						   <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Prognosis *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"  onkeypress="return planscreenname(event);" 
															>
													</div>
												</div>
						   </div>
						 
						   </div>
						   
						  <!--   <div class="col-md-12">
						   <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Prognosis *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" 
															>
													</div>
												</div>
						   </div>
						 
						   </div>-->
											</form>

								</div>
								
							<div class="modal-footer">
							 <a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-medical-self-insured"  class="btn btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							
						</div>
						</div>
						
					</div>
					
				</div>
				
	
				
				
<div class="modal fade" id="drug_details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Drug Details
							</h4>
						</div>
						<div class="modal-body row">
							<form>
 <div class="col-md-12">
						<div class="col-md-6 ">
						 <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Drug name *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															>
													</div>
												</div>
						</div>  
						<div class="col-md-6 ">
						  <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Condition *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															>
													</div>
												</div>
						</div>
						   </div>
			  <div class="col-md-12">
						<div class="col-md-6 ">
						 <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Plan Spend *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															>
													</div>
												</div>
						</div>  
						<div class="col-md-6 ">
						  <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Unique Number *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															>
													</div>
												</div>
						</div>
						   </div>			   
					
											</form>

								</div>
								
							<div class="modal-footer">
							 <a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-medical-self-insured"  class="btn  btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							
						</div>
						</div>
						
					</div>
					
				</div>
				<!-- for enter reinsurance details -->
	<div class="modal fade" id="alert_message" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">x</button>
				<h4 class="modal-title" id="myModalLabel">Alert Message</h4>
			</div>
		
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-12 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">On making this change. The data which is previously entered in input monthly financials table, Will be removed.</label>
				</div>
				
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >No</button>
					   <a id="alert-meassage-id" class="button-remove-modal btn btn-primary btn-sm" >Yes</a>
				
			</div>
	
		</div>
	</div>
</div>

	<div class="modal fade" id="alert_message_select" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">x</button>
				<h4 class="modal-title" id="myModalLabel">Alert Message</h4>
			</div>
			
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-12 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">On making this change. The data which is previously entered in input monthly financials table, Will be removed.</label>
				</div>
				
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >No</button>
					   <a id="alert-meassage-id-select" class="btn btn-primary btn-sm" >Yes</a>
				
			</div>
		
		</div>
	</div>
</div>

								
<div class="modal fade" id="add_plan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity  close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="plan_label">
								Add Plan 
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 <div class="col-md-12">
						 <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Period Start Month*</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control numbers" >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Period End Month*</label>
                                </div>
                                <div class="col-md-8 form-group ">
                              <input type="text" class="form-control numbers" >
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12">
						
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Credibility:</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control numbers" >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" id="label_trend" for="l0">Medical Trend</label>
                                </div>
                                <div class="col-md-8 form-group ">
                            <input type="text" class="form-control numbers" >
                                </div>
                            </div>
						 </div>
						 </div>
						  
					
						  </div>
                        </form>

								<div class="modal-footer">
							 
							<a href=""  class="btn btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
						</div>			
								</div>
								
							
						</div>
						
					</div>
					
				</div>
				
<!-- End for enter reinsurance details -->

<div class="modal fade" id="alert_message_contribution" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">x</button>
				<h4 class="modal-title" id="myModalLabel">Alert Message</h4>
			</div>
		
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-12 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">On making this change. The data which is previously entered in input monthly financials table, Will be removed.</label>
				</div>
				
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >No</button>
					   <a id="alert-meassage-id-contribution" class="button-remove-contribution-modal btn btn-primary btn-sm" >Yes</a>
				
			</div>
	
		</div>
	</div>
</div>


<div class="modal fade" id="alert_message_contribution_renewal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">x</button>
				<h4 class="modal-title" id="myModalLabel">Alert Message</h4>
			</div>
		
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-12 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">On making this change. The data which is previously entered in input monthly financials table, Will be removed.</label>
				</div>
				
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >No</button>
					   <a id="alert-meassage-id-contribution-renewal" class="button-remove-contribution-renewal-modal btn btn-primary btn-sm" >Yes</a>
				
			</div>
	
		</div>
	</div>
</div>
<script>
    $(function() {

        var drugs = [
            "Amyvid", "Quinidine Gluconate", "Trulicity", "TALTZ", "AXIRON","Prozac","Strattera","Symbyax","Cymbalta"
        ];
for(i=1 ; i<= 20 ;i++){
	   $.typeahead({
            input: ".example"+i+"",
            order: "asc",
            minLength: 1,
            source: {
                data: drugs
            },
            cancelButton: false
        });
}
     

    });
</script>