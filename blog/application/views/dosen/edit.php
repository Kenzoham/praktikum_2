<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form edit dosen</h2>
<?php echo form_open("dosen/save") ?>
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">id</label> 
    <div class="col-8">
      <input id="id" name="id" placeholder="Masukkan id" type="text" value="<?php echo $obj_dosen->id?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" value="<?php echo $obj_dosen->nama?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <input id="gender" name="gender" placeholder="Masukkan gender" type="text" value="<?php echo $obj_dosen->gender?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" value="<?php echo $obj_dosen->tmp_lahir?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="text" value="<?php echo $obj_dosen->tgl_lahir?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nidn" class="col-4 col-form-label">nidn</label> 
    <div class="col-8">
      <input id="nidn" name="nidn" type="text" value="<?php echo $obj_dosen->nidn?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="pendidikan" class="col-4 col-form-label">pendidikan</label> 
    <div class="col-8">
      <input id="pendidikan" name="pendidikan" type="text" value="<?php echo $obj_dosen->pendidikan?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
</div>