          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
                <div class="col-lg-6">
                <?= form_error('menu', '<div class="alert alert-danger role="alert">', '</div>');?>
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal"><i class="fa fa-plus"></i> Add New Menu</a>

                    <?= $this->session->flashdata('message')?>

                    <table class="table table-hover">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Menu</th>
                            <th scope="col" class="text-center" colspan="3" >Action</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($menu as $m): ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['menu']; ?></td>
                                <td>
                                <td class="text-center"><a href=""><div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></a></td>
                                <td class="text-center"><a href="" ><div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div></a></td>
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

<!--- Modal -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="<?= base_url()?>menu" method="post">
      <div class="modal-body">
      <div class="form-group">  
            <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name"> 
        </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="Submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>