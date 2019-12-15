          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
                <div class="col-lg">
                <?php if(validation_errors()) : ?>
                <div class="alert alert-danger role="alert">
                  <?= validation_errors(); ?>
                </div>
                <?php endif; ?>
                <?= form_error('menu', '<div class="alert alert-danger role="alert">', '</div>');?>
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal"><i class="fa fa-plus"></i> Add New SubMenu</a>

                    <?= $this->session->flashdata('message')?>

                    <table class="table table-hover">
                        <thead>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Title</th>
                            <th scope="col" class="text-center">Menu</th>
                            <th scope="col" class="text-center">Url</th>
                            <th scope="col" class="text-center">Icon</th>
                            <th scope="col" class="text-center">Active</th>
                            <th scope="col" class="text-center" colspan="3" >Action</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($subMenu as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sm['title']; ?></td>
                                <td><?= $sm['menu']; ?></td>
                                <td><?= $sm['url']; ?></td>
                                <td><?= $sm['icon']; ?></td>
                                <td class="text-center"><?= $sm['is_active']; ?></td>
                                <td class="text-center"><a href="<?= base_url('menu/editmenu');?>"><div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></a></td>
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

<!-- Modal Add -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="<?= base_url()?>menu/submenu" method="post">
      <div class="modal-body">
      <div class="form-group">  
            <input type="text" class="form-control" id="title" name="title" placeholder="SubMenu title"> 
        </div>
        <div class="form-group">
            <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu
                <?php foreach($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach;?>
                </option>
            </select>
        </div>
        <div class="form-group">  
            <input type="text" class="form-control" id="url" name="url" placeholder="SubMenu url"> 
        </div>
        <div class="form-group">  
            <input type="text" class="form-control" id="icon" name="icon" placeholder="SubMenu icon"> 
        </div>
        <div class="form-group">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" name="is_active" value="is_active" checked>
              <label class="form-check-label" for="is_active">
                  Active?
              </label>
          </div>        
        </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="Submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>