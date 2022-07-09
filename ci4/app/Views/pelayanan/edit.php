<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Warga</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<body>

    <div class="container mt-5 mb-5 text-center">
        <h4>Kas Warga DS. Pundenrejo</h4>
    </div>
    <div class="container">
        <h4>Edit Warga</h4>
        <hr>
        <form action="<?php echo base_url('pelayanan/update/' . $pelayanan['pelayanan_id']); ?>" method="post">

            <div class="form-group">
                <label for="">Nama Warga</label>
                <input type="text" name="pelayanan_name" value="<?php echo $pelayanan['pelayanan_name']; ?>" class="form-control" placeholder="nama">
            </div>
            <div class="form-group">
                <label for="">NIK</label>
                <input type="text" name="pelayanan_code" value="<?php echo $pelayanan['pelayanan_code']; ?>" class="form-control" placeholder="nik">
            </div>
            <div class="form-group">
                <label for="">ALAMAT</label>
                <textarea name="pelayanan_description" class="form-control" placeholder="alamat"><?php echo $pelayanan['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <input type="radio" id="pria" name="jenis_kelamin" class="" placeholder="jenis_kelamin"> <label for="pria">PRIA</label> |
                <input type="radio" id="wanita" name="jenis_kelamin" class="" placeholder="jenis_kelamin"> <label for="wanita">Wanita</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>