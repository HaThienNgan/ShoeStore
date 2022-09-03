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
                      <th>ID hóa đơn</th>
                      <th>ID sản phẩm</th>
                      <th>Tên sản phẩm</th>
                      <th>Giá sản phẩm</th>
                      <th>Số lượng</th>
                      <th>Thành tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['cthd'] as $value) {
                      
                     ?>
                    <tr>
                      <td><?php echo $value['id']; ?></td>
                      <td><?php echo $value['id_hoadon']; ?></td>
                      <td><?php echo $value['id_sp']; ?></td>
                      <td><?php echo $value['tensp']; ?></td>
                      <td><?php echo $value['giasp']; ?></td>
                      <td><?php echo $value['soluong']; ?></td>
                      <td><?php echo $value['thanhtien']; ?></td>
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

 