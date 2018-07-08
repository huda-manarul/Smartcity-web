<br>
<div class="container">
	<article>
		<center>
			<h4>Jadwal Pengambilan Sampah</h4>
		</center>
		<br>
		<table>
			<thead>
				<tr>
					<th class="hide"></th>
					<th class="bg-purple">Senin</th>
					<th class="bg-blue">Selasa</th>
					<th class="bg-blue default">Rabu</th>
					<th class="bg-blue">Kamis</th>
					<th class="bg-purple">Jumat</th>
					<th class="bg-blue default">mobil</th>
				</tr>
			</thead>
			<tbody>
				<?php 
      foreach($user as $u){ ?>
				<tr>
					<td><?php echo $u->id_wilayah ?></td>
					<td><?php echo $u->senin ?></td>
					<td><?php echo $u->selasa ?></td>
					<td><?php echo $u->rabu ?></td>
					<td><?php echo $u->kamis ?></td>
					<td><?php echo $u->jumat ?></td>
					<td><?php echo $u->id_mobil ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</article>
</div>
<style type="text/css">
/* DIRTY Responsive pricing table CSS */

/* 
- make mobile switch sticky
*/
* {
	box-sizing:border-box;
	padding:0;
	margin:0;
	outline: 0;
}
body { 
	/*font-family:Helvetica Neue,Helvetica,Arial,sans-serif;*/
	/*font-size:14px;*/
	/*padding:14px;*/
}
article {
	width:100%;
	max-width:1000px;
	margin:0 auto;
	/*height:1000px;*/
	position:relative;
}
button {
	width:100%;
	border: 1px solid #DDD;
	border-right:0;
	border-top:0;
	padding: 10px;
	background:#FFF;
	font-size:14px;
	font-weight:bold;
	height:60px;
	color:#999
}
table { border-collapse:collapse; table-layout:fixed; width:100%; }
th { background:#F5F5F5; display:none; }
td, th {
	height:53px
}
td,th { border:1px solid #DDD; padding:10px; empty-cells:show; }
td,th {
	text-align:left;
}
td+td, th+th {
	text-align:center;
	display:none;
}
td.default {
	display:table-cell;
}
.bg-purple {
	border-top:3px solid #A32362;
}
.bg-blue {
	border-top:3px solid #0097CF;
}
.sep {
	background:#F5F5F5;
	font-weight:bold;
}
.txt-l { font-size:28px; font-weight:bold; }
.txt-top { position:relative; top:-9px; left:-2px; }
.tick { font-size:18px; color:#2CA01C; }
.hide {
	border:0;
	background:none;
}

@media (min-width: 640px) {
	ul {
		display:none;
	}
	td,th {
		display:table-cell !important;
	}
	td,th {
		width: 330px;

	}
	td+td, th+th {
		width: auto;
	}
}
</style>