
	<div class="content-wrapper">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD PRODUCT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="tensp" value="<?php echo $data['product']['tensp'] ;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Giá</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="gia" value="<?php echo $data['product']['gia'] ;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Xuất xứ</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  name="xuatxu" value="<?php echo $data['product']['xuatxu'] ;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  name="soluong" value="<?php echo $data['product']['soluong'] ;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Thông tin</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  name="info" value="<?php echo $data['product']['info'] ;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="des" value="<?php echo $data['product']['des']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cân nặng</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="weight" value="<?php echo $data['product']['weight'] ;?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="editProduct">Edit</button>
                </div>
              </form>
            </div>
	
</div>
