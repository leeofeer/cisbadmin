<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Form Registration</li>
</ol>

<div class="card mb-3">
  <div class="card-header">
    <strong>Form Registration</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo site_url('pages/table') ?>">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="exampleInputName">First name</label>
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
          </div>
          <div class="col-md-6">
            <label for="exampleInputLastName">Last name</label>
            <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmPassword">Confirm password</label>
            <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
          </div>
        </div>
      </div>
      <!-- <a class="btn btn-primary" href="login.html">Register</a> -->
      <input class="btn btn-primary" type="submit" name="submit" value="Save">
      <a class="btn btn-danger" href="#">Cancel
      </a>
    </form>
  </div>
</div>
