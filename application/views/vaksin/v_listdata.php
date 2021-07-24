<?php $this->load->view('partrials/header'); ?>

<div class="container mt-5">
    <a class="btn btn-danger" href="<?php echo base_url('registervaksin');?>">Add +</a>
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
                    <button type="button" class="btn btn-outline-info">Edit</button>
                    <a href="<?php echo base_url('Home/proses_hapusDataMahasiswa/'.$vaksin[$i]->id) ?>" onclick="return confirm('Anda yakin hapus ?')"><button type="button" class="btn btn-outline-danger ml-5 " >Delete</button></a>
                </td>
            </tr>
    <?php	}
    ?>
  </tbody>
</table>
</div>