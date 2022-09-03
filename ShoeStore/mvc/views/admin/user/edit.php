<div class="content-wrapper">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT USER</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="username" value="<?php echo $data['user']['username'] ;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" value="<?php echo $data['user']['password'] ;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  name="level" value="<?php echo $data['user']['level'] ;?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary" name="editUser">Edit user</button>
                </div>
              </form>
            </div>
</div>