<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <!-- END OVERVIEW -->
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3>Detail Buku</h3>
                    <table class="table">
                        <tbody>
                            <?php foreach ($anggota as $member) : ?>
                                <tr>
                                    <th scope="row">ID</th>
                                    <td><?= $member['ID_Anggota']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td><?= $member['Nama']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempat Lahir</th>
                                    <td><?= $member['Tempat_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Lahir</th>
                                    <td><?= $member['Tanggal_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kelamin</th>
                                    <td><?= $member['Gender']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Status</th>
                                    <td><?= $member['Status']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Kewarganegaraan</th>
                                    <td><?= $member['WN']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Keaktifan</th>
                                    <td><?= $member['Aktif']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <a style="margin-top: 20px;" href="<?= base_url(); ?>anggota" class="btn btn-primary">Back</a>
                                    </th>
                                    <td></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-FLUID -->
    </div>
    <!-- END MAIN CONTENT -->
</div>