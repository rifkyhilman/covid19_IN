<?php
 $this->load->view('partrials/header'); 
?>

<div class="container mt-5">
  <form action="<?php echo base_url('Login/proses_login') ?>" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php
 $this->load->view('partrials/footer'); 
?>