<!-- Begin Page Content -->
<div class="container-fluid">
    <table class="table table-hover mt-4" id="data-datatable">
        <thead class="table mt-3">
            <tr>
                <th>#</th>
                <th>Nama Anggota</th>
                <th>Email</th>
                <th>Role ID</th>
                <th>Aktif</th>
                <th>Member Sejak</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($anggota as $a) :
            ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['email']; ?></td>
                    <td><?= $a['role_id']; ?></td>
                    <td><?= $a['is_active']; ?></td>
                    <td><?= $a['tanggal_input']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- end of main content -->