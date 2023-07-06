<div class="container-fluid">
   <!-- Page Heading -->
   <br>
   <center>
   <h1 class="h3 mb-2 text-gray-800">Barangay Officials</h1></center>
   <p class="mb-4">
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-officials') ?>"> Add Officials </a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Position</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Start of Term</th>
      <th scope="col">End of Term</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($officials_list as $officials):?>
    <tr>
    
      <td> <?= $officials->position ?></td>
      <td><?= $officials->name ?></td>
      <td><?= $officials->contact ?></td>
      <td><?= $officials->address ?></td>
      <td><?= $officials->start_term ?></td>
      <td><?= $officials->end_term?></td>
    

      <td> 
        <a class='btn btn-warning btn-sm' href="<?php echo base_url('index.php/dashboard/update-officials/'.$officials->id); ?>">Edit</a> 
      <a class="btn btn-danger btn-sm" href="<?= base_url('index.php/dashboard/delete-officials/'.$officials->id); ?>" >end</a>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
      </div>
   </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>