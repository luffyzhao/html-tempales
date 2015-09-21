<!-- Filter -->
<div class="filter-bar dark margin-bottom-none border-none">
	<form>
		<div>
			<div class="input-append">
				<input type="text" name="from" class="input-mini" style="width: 100px;" placeholder="Quick search .." />
				<button type="submit" class="add-on glyphicons search"><i></i></button>
			</div>
		</div>
		<div class="clearfix"></div>
	</form>
</div>
<!-- // Filter END -->

<h3 class="heading-mosaic">Tasks Overview</h3>
<div class="innerLR">

	<!-- Main tabs -->
	<div class="tabsbar">
		<ul>
			<li class="glyphicons circle_plus active"><a href=""><i></i> Add Task</a></li>
			<li class="glyphicons user_add"><a href=""><i></i> <span>Add Client</span></a></li>
			<li class="glyphicons inbox_plus"><a href=""><i></i> <span>Add Project</span></a></li>
		</ul>
	</div>
	<!-- // Main tabs END -->
	
	<h5 class="separator bottom">Manage tasks</h5>
	
	<!-- Widget -->
	<div class="widget widget-tabs">
	
		<!-- Widget Heading -->
		<div class="widget-head">
			<ul>
				<li class="active"><a href="#tasksDailyTab" data-toggle="tab" class="glyphicons show_lines"><i></i><?php echo $translate->_('Daily'); ?></a></li>
				<li><a href="#tasksWeeklyTab" data-toggle="tab" class="glyphicons show_thumbnails"><i></i><?php echo $translate->_('Weekly'); ?></a></li>
				<li><a href="#tasksMonthlyTab" data-toggle="tab" class="glyphicons calendar"><i></i><?php echo $translate->_('Monthly'); ?></a></li>
			</ul>
		</div>
		<!-- // Widget Heading END -->
		
		<div class="widget-body">
			<div class="tab-content">
			
				<!-- Tasks Daily Tab -->
				<div class="tab-pane active" id="tasksDailyTab">
					<h5>Progress today</h5>
					
					<!-- Progress bar -->
					<div class="progress progress-primary">
					  	<div class="bar right" style="width: 60%;">60%</div>
					</div>
					<!-- // Progress bar END -->
					
					<table class="tasks table table-bordered table-striped table-condensed table-vertical-center">
						<thead>
							<tr>
								<th style="width: 50px">Time</th>
								<th>Task</th>
								<th style="width: 150px">Progress</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=8; $i<=20; $i++): ?>
							<?php 
							$color = '';
							if ($i==8 || $i == 16) $color = 'color-2';
							if ($i>=11 && $i<=14) $color = 'color-1';
							if ($i==15) $color = 'color-3';
							?>
							<tr class="<?php echo $color; ?>">
								<td class="center"><?php echo sprintf("%02d:00", $i); ?></td>
								<td<?php if ($i>8 && $i<11 || $i>16): ?> colspan="2"<?php endif; ?>>
									<?php if ($i==8 || $i>10 && $i<=16): ?>
									<span class="color">Lorem ipsum task</span> <em class="innerLR muted">Short description of the task ...</em>
									<?php else: ?>
									<span class="faded">+ Add task</span>
									<?php endif; ?>
								</td>
								<?php if ($i==8 || $i>10 && $i<=16): ?>
								<td>
									<?php if ($i>10 && $i<=16): $progress = mt_rand(25, 100); ?>
									<div class="progress white progress-small <?php echo $progress<50 ? 'progress-danger' : 'progress-success'; ?>">
									  	<div class="bar right" style="width: <?php echo $progress; ?>%;"><?php echo $progress; ?>%</div>
									</div>
									<?php endif; ?>
									<?php if ($i==8): ?>
									<span class="glyphicons single ok_2"><i></i> complete</span>
									<?php endif; ?>
								</td>
								<?php endif; ?>
							</tr>
							<?php endfor; ?>
						</tbody>
					</table>
				</div>
				<!-- // Tasks Daily Tab END -->
				
				<!-- Tasks Weekly Tab -->
				<div class="tab-pane" id="tasksWeeklyTab">
					
				</div>
				<!-- // Tasks Weekly Tab END -->
				
				<!-- Tasks Monthly Tab -->
				<div class="tab-pane" id="tasksMonthlyTab">
				
				</div>
				<!-- // Tasks Monthly Tab END -->
				
			</div>
		</div>
	</div>
	<!-- // Widget END -->
	
</div>