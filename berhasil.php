<?php if(isset($_GET['status'])): ?>
		<p>
			<?php
				if($_GET['status'] == 'sukses'){
					echo '<script>alert("Sukses Menginput Data")</script>';
				} else {
					echo '<script>alert("GAGAL Menginput Data")</script>';

				}
			?>
		</p>
	<?php endif; ?>