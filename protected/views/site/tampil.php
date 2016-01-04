<style type="text/css">
	table.dataGrid{
		border-collapse: collapse;
		border: 1px solid black;
		width: 100%;
		#font-size:8px; 
	}
	table.dataGrid th{
		border: 1px solid black;
		padding: 5px 5px 5px 5px;

	}
	table.dataGrid td{
		border: 1px solid black;
		padding: 5px 5px 5px 5px;

	}
</style>
<h2>DAFTAR KOTA/KABUPATEN</h2>
<table class="dataGrid">
	<tr>
		<th width="30">Judul Post</th>
		<th width="200">Isi Post</th>
	</tr>
	<?php
	    $no=0; 
			foreach ($rows as $post ) {
				# code...
				$no++;
				?>
				<tr>
				
					<td><?php echo $post['judul_post'];?></td>
					<td><?php echo $post['isi_post'];?></td>
				</tr>
				<?php
			}
			?>
</table>