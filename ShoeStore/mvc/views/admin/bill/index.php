<div class="content-wrapper">
	<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tất cả hóa đơn</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>ID khách hàng</th>
                      <th>Họ tên KH</th>
                      <th>Số điện thoại</th>
                      <th>Địa chỉ</th>
                      <th>Email</th>
                      <th>Ghi chú</th>
                      <th>Đơn vị vận chuyển</th>
                      <th>Tổng tiền</th>
                      <th>Ngày đặt hàng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['hoadon'] as $value) {
                      
                     ?>
                    <tr>
                      <td><?php echo $value['id']; ?></td>
                      <td><?php echo $value['id_cus']; ?></td>
                      <td><?php echo $value['hoten'] ;?></td>
                      <td><?php echo $value['sdt'] ;?></td>
                      <td><?php echo $value['diachi'] ;?></td>
                      <td><?php echo $value['email']; ?></td>
                      <td><?php echo $value['ghichu']; ?></td>
                      <td><?php echo $value['dvvc']; ?></td>
                      <td><?php echo $value['total'] ;?></td>
                      <td><?php echo $value['date'] ;?></td>
                      <td><a href="<?php echo URL."billDetail/index/${value['id']}"; ?>">Chi tiết</a></td>
                      <td><a href="<?php echo URL."bill/delete/${value['id']}"; ?>">Delete</a></td>

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
	
</div>

 