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
                    $hidden = array('Aktif' => 'Aktif');
                    echo form_open('anggota/tambahData', '', $hidden); ?>
                    <div class="card">
                        <h3 class="card-header">Form Tambah Data</h3>
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
                                                'name'          => 'ID',
                                                'style'         => 'width:100%;',
                                                'class'         => 'form-control',
                                                'value'         => set_value('ID')
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
                                                'value'         => set_value('Nama')
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
                                                'value'         => set_value('Tempat')
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
                                                'value'         => set_value('Tanggal')
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
                                            endforeach;
                                            $genre = set_value('Status');
                                            $style = array(
                                                'style'         => 'width:100%;',
                                                'class'         => 'form-control',
                                            );
                                            echo form_dropdown('Status', $option, $genre, $style)
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo form_label('Gender', 'Gender'); ?></th>
                                        <td>
                                            <input type="radio" name="Gender" value="Laki-laki" <?php echo  set_radio('Gender', 'Laki-laki'); ?> /> Laki-laki
                                            <input style="margin-left: 10px;" type="radio" name="Gender" value="Perempuan" <?php echo  set_radio('Gender', 'Perempuan'); ?> /> Perempuan
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo form_label('Kewarganegaraan', 'WN'); ?></th>
                                        <td>
                                            <input type="checkbox" name="WN" value="WNI" <?php echo  set_radio('WN', 'WNI'); ?> /> WNI
                                            <input style="margin-left: 10px;" type="checkbox" name="WN" value="WNA" <?php echo  set_radio('WN', 'WNA'); ?> /> WNA
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>
                                            <?php
                                            $data = array(
                                                'type'          => 'submit',
                                                'name'          => 'submit',
                                                'value'          => 'Submit',
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
                </div>
            </div>
        </div>
        <!-- END CONTAINER-FLUID -->
    </div>
    <!-- END MAIN CONTENT -->
</div>