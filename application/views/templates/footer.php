<div class="clearfix"></div>
<footer>
	<div class="container-fluid">
		<p class="copyright">&copy; 2021 <a href="#">Theme I Need</a>. All Rights Reserved.</p>
	</div>
</footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/chartist/js/chartist.min.js"></script>
<script src="<?= base_url(); ?>assets/scripts/klorofil-common.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
<!-- <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script> -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>

</html>
<script>
	google.charts.load('current', {
		'packages': ['corechart']
	});

	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Gender', 'Total'],
			<?php
			foreach ($Gender as $list) {
				echo "['" . $list['Gender'] . "'," . $list['total'] . "],";
			}
			?>
		]);
		var options = {
			width: 380,
			height: 250,
			is3D: true,
		};

		var chart = new google.visualization.PieChart(document.getElementById('Gender'));

		chart.draw(data, options);
	}

	google.charts.setOnLoadCallback(drawChart1);

	function drawChart1() {
		var data1 = google.visualization.arrayToDataTable([
			['Kewarganegaraan', 'Total'],
			<?php
			foreach ($WN as $data) {
				echo "['" . $data['WN'] . "'," . $data['total'] . "],";
			}
			?>
		]);
		var options1 = {
			width: 380,
			height: 250,
			is3D: true,
		};

		var chart1 = new google.visualization.PieChart(document.getElementById('negara'));

		chart1.draw(data1, options1);
	}

	google.charts.setOnLoadCallback(drawChart2);

	function drawChart2() {
		var data2 = google.visualization.arrayToDataTable([
			['Kewarganegaraan', 'Total'],
			<?php
			foreach ($Status as $data) :
				foreach ($Status1 as $list) :
					if ($list['kd_status'] == $data['Status']) :
						echo "['" . $list['Status'] . "'," . $data['total'] . "],";
					endif;
				endforeach;
			endforeach;
			?>
		]);
		var options2 = {
			width: 470,
			height: 250,
			is3D: true,
		};

		var chart2 = new google.visualization.PieChart(document.getElementById('status'));

		chart2.draw(data2, options2);
	}

	google.charts.setOnLoadCallback(drawChart3);

	function drawChart3() {
		var data3 = google.visualization.arrayToDataTable([
			['Kewarganegaraan', 'Total'],
			<?php
			foreach ($Genre as $data1) :
				foreach ($Genre1 as $list1) :
					if ($list1['kd_genre'] == $data1['Genre']) :
						echo "['" . $list1['Genre'] . "'," . $data1['total'] . "],";
					endif;
				endforeach;
			endforeach;
			?>
		]);
		var options3 = {
			is3D: true,
		};

		var chart3 = new google.visualization.PieChart(document.getElementById('Genre'));

		chart3.draw(data3, options3);
	}
</script>
