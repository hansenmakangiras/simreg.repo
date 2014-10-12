<div class="col-lg-12">
    <a href="<?php echo site_url('admin/user/edit');?>" class="btn double-button bg-black">
        <span class="glyph-icon icon-separator float-left">
            <i class="glyph-icon icon-plus-sign"></i>
        </span>
        <span class="button-content">
            Tambah User
            <span>Input Pengguna Baru</span>
        </span>
    </a>
    <div class="divider"></div>

    <div class="example-code">
        <div class="row">
            <div class="col-md-6>">
                <table class="table table-condensed" id="example1">
                    <thead>
                        <tr>
                            <!-- <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>  
                            <th>Aksi</th> -->
                            <th><?php echo lang('index_fname_th');?></th>
                            <th><?php echo lang('index_lname_th');?></th>
                            <th><?php echo lang('index_email_th');?></th>
                            <th><?php echo lang('index_groups_th');?></th>
                            <th><?php echo lang('index_status_th');?></th>
                            <th><?php echo lang('index_action_th');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($users)): foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <td class="font-bold text-left"><?php echo $user->nama; ?></td>
                            <td class="font-bold text-left"><?php echo anchor('admin/user/edit/' . $user->id, $user->email);?></td>
                            <td><div class="label bg-gray"><?php echo anchor('admin/user/edit' .$user->id, $user->levelakses); ?></div></td>
                            <td>
                                <a href="<?php echo site_url('admin/user/edit/'.$user->id); ?>" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Edit">
                                    <i class="glyph-icon icon-edit"></i>
                                </a>
                                <a href="<?php echo site_url('admin/user/delete/'.$user->id); ?>" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Hapus">
                                    <i class="glyph-icon icon-remove"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                            <td>Pengguna tidak dapat ditemukan</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>