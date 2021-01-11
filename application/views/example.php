<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script src="Https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
 <script src=" Https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('examples/matkul')?>'>Mata Kuliah</a> |		 
		<a href='<?php echo site_url('examples/mhs')?>'>Mahasiswa</a> |
		<a href='<?php echo site_url('examples/transkrip')?>'>Transkrip Nilai</a>|

		
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
