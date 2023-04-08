<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	   <!-- Required meta tags -->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Admin</title>
</head>
<body>
    <form action="/Admin/edit" method="post">
        <input type="text" name="nama_admin" value="<?= $Admin->nama_admin;?>">
		 <input type="text" name="staf" value="<?= $Admin->staf;?>">
        <input type="text" name="no_telp" value="<?= $Admin->no_telp;?>">
        <input type="hidden" name="id_admin" value="<?= $Admin->id_admin;?>">
        <button type="submit">Update</button>
    </form>
</body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>