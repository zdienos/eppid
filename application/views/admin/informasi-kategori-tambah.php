<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <title>Tambah Menu/Kategori</title>
  </head>
  <body>
    <div class="container">
      <h1>FORM TAMBAH MENU/KATEGORI </h1>

      <?php echo form_open_multipart('admin/informasi_proses', 'class="form-horizontal"', 'role="form"'); 
      ?>
        <div class="form-group">
          <label for="inputParentMenu">Menu / Kategori</label>
          <select class="form-control" id="inputParentMenu" name="inputParentMenu">
            <option value="">Pilih Menu / Kategori</option>
            <?php 
              $i=1;
              foreach ($dataKategori->result() as $row) {
            ?>
              <option value="<?= $row->id_menu ?>"><?= $row->nama_menu ?></option>
            <?php 
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="inputNamaMenu">Nama Menu/Kategori</label>
          <input type="text" class="form-control" id="inputNamaMenu" name="inputNamaMenu" placeholder="Isikan Nama Kategori">
        </div>
        <div class="form-group">
          <label for="inputKeteranganMenu">Keterangan Menu/Kategori</label>
          <textarea id="inputKeteranganMenu" name="inputKeteranganMenu" class="form-control"></textarea> 
        </div>
        <div class="form-group">
          <label for="inputMenuSeo">link / seo</label>
          <input type="text" class="form-control" id="inputMenuSeo" name="inputMenuSeo" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>      
    </div>
    <div class="container">
      <table class="table table-dark">
        <thead>
          <th>No.</th>
          <th>Nama Kategori</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </thead>
        <tbody>
          <?php 
            $i=1;
            foreach ($dataKategori->result() as $row) {

              ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row->nama_menu ?></td>
                <td><?= $row->keterangan_menu ?></td>
                <td>
                  <a href="<?= base_url()?>admin/informasi_proses/edit">edit</a>
                  <a href="<?= base_url()?>admin/informasi_proses/hapus">hapus</a>
                </td>
              </tr>

              <?php 

            }
          ?>
        </tbody>
      </table>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>