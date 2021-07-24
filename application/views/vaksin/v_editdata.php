<?php $this->load->view('partrials/header'); ?>

<div class="container mt-5">
    <form method = "POST" action="<?php echo base_url('UpdateDataVaksin/updatedata/'.$db->id); ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">No.KTP</label>
        <input type="text" class="form-control" name="ktp" value="<?php echo set_value('ktp', $db->ktp); ?>" placeholder="Masukan Nomor KTP">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">No.Kartu Keluarga</label>
        <input type="text" class="form-control" name="kk" value="<?php echo set_value('kk', $db->kk); ?>" placeholder="Masukan Nomor KK">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $db->nama); ?>" placeholder="Masukan Nama Lengkap Anda">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Usia</label>
        <input type="text" class="form-control" name="usia" value="<?php echo set_value('usia', $db->usia); ?>" placeholder="Masukan Usia Anda">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Rumah sakit</label>
        <input type="text" class="form-control" name="rumahsakit" value="<?php echo set_value('rumahsakit', $db->rumahsakit); ?>" placeholder="Password">
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary" value="upload">Save</button>
    </div>
    </form>
</div>

<?php $this->load->view('partrials/footer'); ?> 