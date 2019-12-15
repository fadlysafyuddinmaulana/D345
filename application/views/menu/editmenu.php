          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
              <div class="col-lg-6">
              <?= $this->session->flashdata('message')?>
              <form action="<?= base_url()?>menu/editmenu" method="post">
                <div class="form-group">
                  <label for="id">Id</label>
                  <input type="text" class="form-control"  id="id" name="id" value="<?= $user_role['id']; ?>" readonly>
                </div>

                <div class="form-group">
                  <label for="new_Password1">New Password</label>
                  <input type="text" class="form-control" id="new_password1" name="new_password1" value>
                  <?= form_error('new_password1','<small class="text-danger pl-3">','</small>');?>
                </div>

                <div class="form-group">
                  <label for="new_Password2">Repeat Password</label>
                  <input type="password" class="form-control" id="new_password2" name="new_password2">
                  <?= form_error('new_password2','<small class="text-danger pl-3">','</small>');?>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-pen"></i> Change Passworrd</button>
                </div>
              </form>

              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->