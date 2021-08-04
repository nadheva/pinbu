<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <!-- END OVERVIEW -->
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-body">
                    <h3>Daftar Buku</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($buku as $book) : ?>
                                <tr>
                                    <td><?= $book['ID_Buku']; ?></td>
                                    <td><?= $book['Judul']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>buku/detail/<?= $book['ID_Buku']; ?>" class="label label-primary">Detail</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url(); ?>buku/editData/<?= $book['ID_Buku']; ?>" class="label label-success">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url(); ?>buku/hapus/<?= $book['ID_Buku']; ?>" class="label label-danger" onclick="return confirm('yakin?');">Hapus</a>
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