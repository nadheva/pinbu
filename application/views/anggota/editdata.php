<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <!-- END OVERVIEW -->
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-body">
                    <?php
                    foreach ($anggota as $member) :
                        $hidden = array('ID' => $member['ID_Anggota']); ?>
                        <?php echo form_open('anggota/accData', '', $hidden); ?>
                        <div class="card">
                            <h3 class="card-header">Form Edit Data</h3>
                            <div class="card-body">
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo form_label('ID', 'ID'); ?></th>
                                            <td>
                                                <?php
                                                $data = array(
                                                    'style'         => 'width:100%;',
                                                    'class'         => 'form-control',
                                                    'value'         => $member['ID_Anggota'],
                                                    'disabled'      => TRUE
                                                );
                                                echo form_input($data);
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?php echo form_label('Nama', 'Nama'); ?></th>
                                            <td>
                                                <?php
                                                $data = array(
                                                    'name'          => 'Nama',
                                                    'style'         => 'width:100%;',
                                                    'class'         => 'form-control',
                                                    'value'         => $member['Nama']
                                                );
                                                echo form_input($data);
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?php echo form_label('Tempat Lahir', 'Tempat Lahir'); ?></th>
                                            <td>
                                                <?php $data = array(
                                                    'name'          => 'Tempat',
                                                    'maxlength'     => '100',
                                                    'style'         => 'width:100%;',
                                                    'class'         => 'form-control',
                                                    'value'         => $member['Tempat_lahir']
                                                );
                                                echo form_input($data);
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?php echo form_label('Tanggal Lahir', 'Tanggal Lahir'); ?></th>
                                            <td>
                                                <?php $data = array(
                                                    'type'          => 'date',
                                                    'name'          => 'Tanggal',
                                                    'maxlength'     => '100',
                                                    'style'         => 'width:100%;',
                                                    'class'         => 'form-control',
                                                    'value'         => $member['Tanggal_lahir']
                                                );
                                                echo form_input($data);
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?php echo form_label('Status', 'Status'); ?></th>
                                            <td>
                                                <?php foreach ($status as $list) :
                                                    $option[$list['kd_status']] = $list['Status'];
                                                    if ($list['kd_status'] == $member['Status']) :
                                                        $genre = $member['Status'];
                                                        $style = array(
                                                            'style'         => 'width:100%;',
                                                            'class'         => 'form-control',
                                                            'selected'      => TRUE
                                                        );
                                                    else :
                                                        $genre = $member['Status'];
                                                        $style = array(
                                                            'style'         => 'width:100%;',
                                                            'class'         => 'form-control',
                                                        );
                                                    endif;
                                                endforeach;
                                                echo form_dropdown('Status', $option, $genre, $style);
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?php echo form_label('Gender', 'Gender'); ?></th>
                                            <td>
                                                <input type="radio" name="Gender" value="Laki-laki" <?php echo ($member['Gender'] == 'Laki-laki' ? ' checked' : ''); ?> /> Laki-laki
                                                <input style="margin-left: 10px;" type="radio" name="Gender" value="Perempuan" <?php echo ($member['Gender'] == 'Perempuan' ? ' checked' : ''); ?> /> Perempuan
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?php echo form_label('Kewarganegaraan', 'WN'); ?></th>
                                            <td>
                                                <input type="checkbox" name="WN" value="WNI" <?php echo ($member['WN'] == 'WNI' ? ' checked' : ''); ?> /> WNI
                                                <input style="margin-left: 10px;" type="checkbox" name="WN" value="WNA" <?php echo ($member['WN'] == 'WNA' ? ' checked' : ''); ?> /> WNA
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>
                                                <a href="<?= base_url(); ?>anggota" class="btn btn-danger">Cancel</a>
                                                <?php
                                                $data = array(
                                                    'type'          => 'submit',
                                                    'name'          => 'submit',
                                                    'value'          => 'Update',
                                                    'class'         => 'btn btn-primary float-end'
                                                );

                                                echo form_input($data);
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-FLUID -->
    </div>
    <!-- END MAIN CONTENT -->
</div>