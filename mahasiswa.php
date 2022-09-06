<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah data</button>

	<table class = "table" border="1px solid black">
		
		<tr>
			<th>ID</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Create at</th>
			<th>Update at</th>
		</tr>

		<?php foreach ($mahasiswa as $mhs) : ?>

		<tr>
			<td><?php echo $mhs['id']; ?></td>
			<td><?php echo $mhs['npm']; ?></td>
			<td><?php echo $mhs['nama']; ?></td>
			<td><?php echo $mhs['email']; ?></td>
			<td><?php echo $mhs['create_at']; ?></td>
			<td><?php echo $mhs['update_at']; ?></td>
		</tr>

		<?php endforeach; ?>

	</table>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Isi Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="mahasiswa/add">
  			<div class="form-group">
    			<label for="formGroupExampleInput">NPM</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan NPM">
  			</div>
  			<div class="form-group">
    			<label for="formGroupExampleInput2">Nama</label>
    			<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Nama">
  			</div>
  			<div class="form-group">
    			<label for="formGroupExampleInput3">Email</label>
    			<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Email">
  			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>