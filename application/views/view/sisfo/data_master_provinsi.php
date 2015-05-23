<div class="ui grid" id="custom">
    <div class="five wide column">
        <div class="ui segment">
            <form class="ui form">
                <div class="field">
                    <label>Provinsi</label>
                    <input type="text" name="namaProvinsi" placeholder="Provinsi" id="namaProvinsi">
                </div>
                <div class="field">
                    <button type="button" class="ui blue button" onclick="insertProvinsi(namaProvinsi.value)">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="eleven wide column">
        <div class="ui segment" id="segmentTableProvinsi">
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
        </div>
    </div>
</div>

<div class="ui modal" id="modalUpdateProvinsi">
    <i class="close icon"></i>
    <div class="header">
        Update Provinsi
    </div>
    <div class="content">
        <form class="ui form">
            <div class="field">
                <label>ID Provinsi</label>
                <input type="text" name="updateIDProvinsi" id="updateIDProvinsi" readonly>
            </div>
            <div class="field">
                <label>Provinsi</label>
                <input type="text" name="updateProvinsi" id="updateProvinsi">
            </div>
            <div class="field">
                <button type="button" class="ui blue button" id="buttonUpdateProvinsi">Update</button>
            </div>
        </form>
    </div>
</div>

<div class="ui basic modal" id="modalDeleteProvinsi">
    <div class="header">
        Delete Data Provinsi
    </div>
    <div class="content">
        <div class="image">
            <i class="archive icon"></i>
        </div>
        <div class="description">
            <p>Apakah anda yakin ingin menghapus data </p>
            <p>ID Provinsi : </p><p id="IDP"></p>
            <p>Nama Provinsi : </p><p id="NAMAP"></p>
        </div>
    </div>
    <div class="actions">
        <div class="two fluid ui inverted buttons">
            <div class="ui red basic inverted button" id="cancelDelete">
                <i class="remove icon"></i>
                No
            </div>
            <div class="ui green basic inverted button" id="confirmDelete">
                <i class="checkmark icon"></i>
                Yes
            </div>
        </div>
    </div>
</div>