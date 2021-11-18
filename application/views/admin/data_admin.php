<!-- Begin Page Content -->
<div class="container-fluid">
    <table class="table table-hover mt-4" id="data-datatable">
        <thead class="table mt-3">
            <tr>
                <th>#</th>
                <th>Nama Admin</th>
                <th>Email</th>
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
                    <td><?= $a['is_active']; ?></td>
                    <td><?= date("d F Y", date($a['tanggal_input']));?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- end of main content -->