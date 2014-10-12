<p class="font-gray-dark">
    <?php echo validation_errors(); ?>
</p>
<div class="divider"></div>
<div class="row">
    <div class="col-md-6">
        <div class="content-box drop-shadow-alt">
            <h3 class="content-box-header">
                <div class="glyph-icon icon-separator transparent">
                    <i class="glyph-icon icon-user font-green"></i>
                </div>
                <span class="float-left pad0L"><?php echo empty($user->id) ? 'Tambah User Baru' : 'Edit User : ' . $user->nama; ?></span>
            </h3>
            <div class="content-box-wrapper">
                <form id="form-tambah" action="<?php echo site_url('admin/user/edit'); ?>" class="col-md-12 center-margin" method="POST" />
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                Nama:
                                <span class="required">*</span>
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <?php echo form_input('nama', set_value('nama', $user->nama)) ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                Email:
                                <span class="required">*</span>
                            </label>
                        </div>
                        <div class="form-input col-md-9">

                            <?php echo form_input('email', set_value('email', $user->email)) ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                Password:
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <?php echo form_password('password', set_value('password', 'default')); ?>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="" class="label-description">
                                Level Akses:
                            </label>
                        </div>
                        <div class="form-input col-md-9">                    
                            <select data-required="true" name="level_akses" id="login_level">
                                <option value="">Pilih Akses</option>
                                <option value=1>Super Admin</option>
                                <option value=2>Administrator</option>
                                <option value=3>Pengurus</option>
                                <option value=4>Alumni</option>
                                <option value=5>Anggota</option>
                            </select>
                        </div>
                    </div>
                    <div class="divider"></div>
                        <div class="form-row">
                            <input type="hidden" name="superhidden" id="superhidden" />
                            <div class="form-input col-md-10 col-md-offset-2">
                                <button type="submit" class="btn medium primary-bg radius-all-4" id="form-tambah" onclick="javascript:$( & apos; #form - edit & apos; ).parsley( & apos; validate & apos; );" title="Validate!">
                                    <span class="button-content">Simpan</span>
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>    
    </div>  

    <div class="col-md-6">
        <div class="content-box drop-shadow-alt">
            <h3 class="content-box-header">
                <div class="glyph-icon icon-separator transparent">
                    <i class="glyph-icon icon-legal font-green"></i>
                </div>
                <span class="float-left pad0L"><?php echo empty($user->id) ? 'Tambah Level Akses' : 'Edit Level Akses: ' . $user->levelakses; ?></span>
            </h3>
            <div class="content-box-wrapper">
                <div class="pad10T font-italic font-gray-dark">These helper classes can be added to any element which enabled you to create unlimited types of element blocks.</div>
                <div class="divider"></div>
                <form>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                Level:
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <?php echo form_password('password',''); ?>

                        </div>
                    </div>
                    <table class ="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Level Akses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $levels = $this->user_model->get_level();?>
                            <?php if(count($levels)): foreach ($levels as $level): ?>
                            <tr>
                                <td><?php echo $levels->level_id; ?></td>
                                <td class="font-bold text-left"><?php echo $user->levelakses; ?></td>
                            </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                            <tr>
                                <td>Pengguna tidak dapat ditemukan</td>
                            </tr>
                                <?php endif; ?>
                        </tbody>
                    </table>
                        
                    <div class="divider"></div>
                    <div class="form-row">
                            <input type="hidden" name="superhidden" id="superhidden" />
                            <div class="form-input col-md-10 col-md-offset-2">
                                <button type="submit" class="btn medium primary-bg radius-all-4" id="form-tambah" onclick="javascript:$( & apos; #form - edit & apos; ).parsley( & apos; validate & apos; );" title="Validate!">
                                    <span class="button-content">Simpan</span>
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>        

           