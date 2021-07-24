<?php $this->load->view('partrials/header'); ?>

<div class="container mt-5">
    <form method = "POST" action="<?php echo base_url('Registervaksin/proses_register'); ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">No.KTP</label>
        <input type="text" class="form-control" name="ktp" placeholder="Masukan Nomor KTP">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">No.Kartu Keluarga</label>
        <input type="text" class="form-control" name="kk" placeholder="Masukan Nomor KK">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap Anda">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Usia</label>
        <input type="text" class="form-control" name="usia" placeholder="Masukan Usia Anda">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Rumah sakit</label>
        <input type="text" class="form-control" name="rumahsakit" placeholder="Password">
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary" value="upload">Save</button>
    </div>
    </form>
</div>

<?php $this->load->view('partrials/footer'); ?> 