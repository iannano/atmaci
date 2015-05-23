<table class="ui table" id="tableProvinsi">
    <thead>
        <tr>
            <th>ID Provinsi</th>
            <th>Provinsi</th>
            <th>Kontrol</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query as $item): ?>
            <tr>
                <td id="IDP"><?php echo $item['IDP']; ?></td>
                <td id="NAMAP"><?php echo $item['NAMAP']; ?></td>
                <td><button type="button" class="ui blue button" onclick="updateProvinsi(this)">Update</button> <button type="button" class="ui red button" onclick="deleteProvinsi(this)">Delete</button></td>
            </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script type="text/javascript">
    $('#tableProvinsi').DataTable();
</script>