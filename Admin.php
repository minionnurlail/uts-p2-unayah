<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
 
                <?php if(!empty(session()->getFlashdata('message'))) : ?>
 
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('message');?>
                </div>
                    
                <?php endif ?>
 
               
                <a href="<?php echo base_url('Admin/input/') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama Admin</th>
                            <th>Staf</th>
                               <th>No Telpon</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($ModelAdmin as $key => $unayah) : ?>
 
                            <tr>
                                <td><?php echo $unayah['nama_admin'] ?></td>
                                <td><?php echo $unayah['staf'] ?></td>
                                  <td><?php echo $unayah['no_telp'] ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('Admin/update/'.$unayah['id_admin']) ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="<?php echo base_url('Admin/delete/'.$unayah['id_admin']) ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
 
                        <?php endforeach ?>
                    </tbody>
                </table>
              
            </div>
        </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>