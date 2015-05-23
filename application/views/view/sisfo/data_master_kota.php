<div class="ui grid" id="custom">
    <div class="five wide column">
        <div class="ui segment">
            <form class="ui form">
                <div class="field">
                    <label>Provinsi</label>
                    <div class="ui selection dropdown" id="dropdownProvinsi">
                        <input type="hidden" name="provinsiKelahiran" onchange="getKotaKelahiran(this.value)">
                        <div class="default text">Provinsi Kelahiran</div>
                        <i class="dropdown icon"></i>
                        <div class="menu" id="provinsiTempatLahir">

                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Kota</label>
                    <input type="text" name="namaKota" placeholder="Kota" id="namaKota">
                </div>
                <div class="field">
                    <button type="button" class="ui blue button" onclick="insertKota(namaKota.value)">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="eleven wide column">
        <div class="ui segment" id="segmentTableProvinsi">
            <table class="ui table" id="tableProvinsi">
                <thead>
                    <tr>
                        <th>ID Kota</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Kontrol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $item): ?>
                        <tr>
                            <td id="IDK"><?php echo $item['IDK']; ?></td>
                            <td id="IDP"><?php echo $item['NAMAP']; ?></td>
                            <td id="NAMAK"><?php echo $item['NAMAK']; ?></td>
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
            <p id="IDP"></p>
            <p id="NAMAP"></p>
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