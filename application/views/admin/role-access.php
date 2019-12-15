          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message')?>
                    
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>

                    <h5>Role : <?= $role['role'];?></h5>

                    <table class="table table-hover">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Menu</th>
                            <th scope="col" class="text-center" colspan="4">Access</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($menu as $m): ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['menu']; ?></td>
                                <td>
                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id'];?>" data-menu="<?= $m['id'];?>">
                                </td>
                                
                                
                            </tr>
                            <?php $i++;?>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>            

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->