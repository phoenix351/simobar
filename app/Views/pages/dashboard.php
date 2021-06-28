<h2><?= esc($title) ?></h2>
<!--Load the AJAX API-->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {
        'packages': ['corechart']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();


        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Jumlah');
        data.addRows([
            <?php foreach ($kondisiSum as $kondisi) : ?>["<?= esc($kondisi['kondisi']); ?>", <?= esc($kondisi['jumlah']); ?>],

            <?php endforeach; ?>
        ]);

        // Set chart options
        var options = {
            'title': 'Jumlah Barang Berdasarkan Kondisi',
            'width': 500,
            'height': 300
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>



<!--Div that will hold the pie chart-->
<div id="chart_div"></div>


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