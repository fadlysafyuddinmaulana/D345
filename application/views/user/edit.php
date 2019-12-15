          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
                <div class="col-lg-8">

                    <?= form_open_multipart('user/edit');?>
                    
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email"  value="<?= $tbuser['email']; ?>" readonly>
                        </div>
                    </div>                    
                    
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="name" class="form-control" value="<?= $tbuser['name']; ?>">
                            <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                    </div>                    
                    
                    <div class="form-group row">
                        <div class="col-sm-2">Picture</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/profile/') .$tbuser['image'];?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="image" class="custom-file-input">
                                        <label for="image" class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                        </div>
                    </div>                

                    </form>


                </div>  
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->