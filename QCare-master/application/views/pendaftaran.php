<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>css/daftar.css">

  
</head>

<body>
  
<div class="container">
  <form action="#" method="POST">
    <div class="row">
      <h4>Daftar ID Antrian</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Nama Lengkap" name="nama" required />
        <div class="input-icon"><i class="fa fa-pencil"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Umur" name="umur" required />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Alamat" required />
        <div class="input-icon"><i class="fa fa-map-marker"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Kelurahan / Kecamatan" required />
        <div class="input-icon"><i ></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Kabupaten" required />
        <div class="input-icon"><i></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Provinsi" required />
        <div class="input-icon"><i ></i></div>
      </div>

     
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Tanggal Lahir</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Jenis Kelamin</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Pria</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Wanita</label>
        </div>
      </div>
    </div>
    <div class="input-group input-group-icon">
        <input type="text" placeholder="No KTP" required />
        <div class="input-icon"><i class="fa fa-card"></i></div>
    </div>
    
    <div class="row">
      <h4>Required</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">
          Saya bersedia datang tepat waktu dan sesuai dengan jadwal yang saya pilih dalam minggu ini. Akan saya batalkan jadwalnya jika saya tidak dapat hadir sesuai jadwal.
        </label>
        <input type="submit" name="submit" value="Daftar">
      </div>
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>js/index.js"></script>

</body>
</html>
