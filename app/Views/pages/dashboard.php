<h2><?= esc($title) ?></h2>

<?php if (!empty($barang) && is_array($barang)) : ?>
    <div class="container-fluid">
        <table id="example" class="table table-sm table-striped table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Merk</th>
                    <th>Tahun Peroleh</th>
                    <th>Kondisi</th>
                    <th>Lokasi Barang</th>
                    <th>NIP pemilik</th>
                    <th>Nomor Serial</th>
                    <th>NIB</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($barang as $item_barang) : ?>

                    <tr>
                        <td><?= esc($item_barang['merk']) ?></td>
                        <td><?= esc($item_barang['tahunPeroleh']) ?></td>
                        <td><?= esc($item_barang['kondisi']) ?></td>
                        <td><?= esc($item_barang['lokasiBarang']) ?></td>
                        <td><?= esc($item_barang['nipPegawai']) ?></td>
                        <td><?= esc($item_barang['nomorSerial']) ?></td>
                        <td><?= esc($item_barang['nib']) ?></td>

                    </tr>


                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>