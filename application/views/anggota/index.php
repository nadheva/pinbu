<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <!-- END OVERVIEW -->
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-body">
                    <h3>Daftar Anggota</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($anggota as $member) : ?>
                                <tr>
                                    <td><?= $member['ID_Anggota']; ?></td>
                                    <td><?= $member['Nama']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>anggota/detail/<?= $member['ID_Anggota']; ?>" class="label label-primary">Detail</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url(); ?>anggota/editData/<?= $member['ID_Anggota']; ?>" class="label label-success">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url(); ?>anggota/hapus/<?= $member['ID_Anggota']; ?>" class="label label-danger" onclick="return confirm('yakin?');">Hapus</a>
                                    </td>
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