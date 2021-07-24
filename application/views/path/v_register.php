<?php $this->load->view('partrials/header'); ?>

<div class="container mt-5">
    <form method = "POST" action="<?php echo base_url('Register/proses_register'); ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary" value="upload">Save</button>
    </div>
    </form>
</div>

<?php $this->load->view('partrials/footer'); ?>