<?php $this->load->view('partrials/header'); ?>

<div class="container mt-5 mb-5">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.KTP</th>
      <th scope="col">No.Kartu Keluarga</th>
      <th scope="col">Nama</th>
      <th scope="col">Usia</th>
      <th scope="col">Rumah Sakit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 
    <?php 
       // $user adalah variabel yang mengandung nilai table dari dari tabase
        for($i = 0; $i < count($vaksin);$i++){
            ?>
            <!-- echo $user[$i]->nama; -->
            <tr>
            <th scope="row"><?php echo $vaksin[$i]->ktp; ?></th>
                <td><?php echo $vaksin[$i]->kk; ?></td>
                <td><?php echo $vaksin[$i]->nama; ?></td>
                <td><?php echo $vaksin[$i]->usia; ?></td>
                <td><?php echo $vaksin[$i]->rumahsakit; ?></td>
                <td>
                    <a class="btn btn-outline-primary" href="<?php echo base_url('UpdateDataVaksin/form_edit/'.$vaksin[$i]->id) ?>" type="button" class="btn btn-outline-info">Edit</a>
                    <a class="btn btn-outline-danger ml-5" href="<?php echo base_url('DataVaksin/proses_hapusdata/'.$vaksin[$i]->id) ?>" onclick="return confirm('Anda yakin hapus ?')">Delete</a>
                </td>
            </tr>
    <?php	}
    ?>
  </tbody>
</table>
<div class="d-flex justify-content-end">
    <a class="btn btn-success" href="<?php echo base_url('registervaksin');?>">Add +</a>
</div>
</div>
<?php $this->load->view('partrials/footer'); ?>