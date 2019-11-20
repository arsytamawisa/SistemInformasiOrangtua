
<script src="<?= base_url() ?>assets/user/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/user/vendor/popper.js/umd/popper.min.js"> </script>
<script src="<?= base_url() ?>assets/user/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/user/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="<?= base_url() ?>assets/user/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/user/js/front.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>
	$(document).ready(function(){
		$("select[name=bulan]").on('change',function(){
			var bulan = $(this).val();
			var id_kelas = document.getElementById('kelas').value;
			
			$.ajax({
				url:"<?php echo base_url("presensi/hasil") ?>",
				method:"POST",
				data:"id_detail_kelas="+id_kelas+"&bulan="+bulan,
				success:function(data){
					$("#absensi").html(data);
				}
			})
		})
	})
</script>

<script>
	$(document).ready(function(){
		$.ajax({
			url:"<?php echo base_url("presensi/hasil_presensi") ?>",
			success:function(data){
				$("#absensi").html(data);
			}
		})
	})
</script>

<script>
	$(document).ready(function(){
		$("select[name=semester]").on('change',function(){
			var semester = $(this).val();
			var id_detail_kelas = document.getElementById('id_detail_kelas').value;
			
			$.ajax({
				url:"<?php echo base_url("nilai/hasil") ?>",
				method:"POST",
				data:"id_detail_kelas="+id_detail_kelas+"&id_semester="+semester,
				success:function(data){
					$("#nilai").html(data);
				}
			})
		})
	})
</script>

<!-- <script>
	$(document).ready(function(){
		$("select[name=semester]").on('change',function(){
			var semester = $(this).val();
			$.ajax({
				url:"<?php echo base_url("nilai/hasil_nilai") ?>",
				method:"POST",
				data:"id_semester="+semester,
				success:function(data){
					$("#nilai").html(data);
				}
			})
		})
	})
</script> -->

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>

</body>
</html>