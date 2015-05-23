<h2 class="ui center aligned header grid" id="custom">
    Pendaftaran Atma
</h2>
<div class="ui two column centered grid" id="custom">
    <center>
        <div class="column">
            <div class="ui steps">
                <div class="active step" id="1">
                    <i class="truck icon"></i>
                    <div class="content">
                        <div class="title">Biodata Diri</div>
                        <div class="description">Isilah biodata diri anda</div>
                    </div>
                </div>
                <div class="step" id="2">
                    <i class="payment icon"></i>
                    <div class="content">
                        <div class="title">Pilih Paket</div>
                        <div class="description">Pilih paket yang anda minati</div>
                    </div>
                </div>
                <div class="step" id="3">
                    <i class="info icon"></i>
                    <div class="content">
                        <div class="title">Konfirmasi Pendaftaran</div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
<div class="ui divider"></div>
<div class="ui two column centered grid" id="render-next-form" style="margin: 0 0 0 0; padding: 0 0 0 0;">
    <div class="column">
        <div class="ui segment">
            <form class="ui form" id="formDaftar">
                <div class="field">
                    <label>Nama Lengkap</label>
                    <input type="text" name="namaLengkap" placeholder="Nama Lengkap">
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Jenis Kelamin</label>
                        <input type="radio" name="jenisKelamin" value="L"> L
                    </div>
                    <div class="field">
                        <label>&nbsp;</label>
                        <input type="radio" name="jenisKelamin" value="P"> P
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Provinsi Kelahiran</label>
                        <div class="ui selection dropdown" id="dropdownProvinsiKelahiran">
                            <input type="hidden" name="provinsiKelahiran" onchange="getKotaKelahiran(this.value)">
                            <div class="default text">Provinsi Kelahiran</div>
                            <i class="dropdown icon"></i>
                            <div class="menu" id="provinsiTempatLahir">

                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Kota Kelahiran</label>
                        <div class="ui selection dropdown disabled" id="dropdownKotaKelahiran">
                            <input type="hidden" name="kotaKelahiran">
                            <div class="default text">Kota Kelahiran</div>
                            <i class="dropdown icon"></i>
                            <div class="menu" id="kotaTempatLahir">

                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggalLahir">
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Provinsi</label>
                        <div class="ui selection dropdown" id="dropdownProvinsi">
                            <input type="hidden" name="provinsi" onchange="getKota(this.value)">
                            <div class="default text">Provinsi</div>
                            <i class="dropdown icon"></i>
                            <div class="menu" id="provinsiItem">

                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Kota</label>
                        <div class="ui selection dropdown disabled" id="dropdownKota">
                            <input type="hidden" name="kota">
                            <div class="default text">Kota</div>
                            <i class="dropdown icon"></i>
                            <div class="menu" id="kotaItem">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat">
                </div>
                <div class="field">
                    <label>Nomer Handphone / Telphone</label>
                    <input type="text" name="nomerTelphone" placeholder="Nomer Handphone">
                </div>
                <div class="field">
                    <label>Pekerjaan</label>
                    <div class="ui selection dropdown" id="dropdownPekerjaan">
                        <input type="hidden" name="pekerjaan">
                        <div class="default text">Pekerjaan</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item">Swasta</div>
                            <div class="item">Wiraswasta</div>
                            <div class="item">Guru</div>
                            <div class="item">Siswa</div>
                            <div class="item">Mahasiswa</div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="field">
                    <center>
                        Prove you are not robot.
                        <div id="captcha_container"></div>
                    </center>
                </div>
                <div class="field">
                    <button type="button" class="ui button" id="submitBiodata" onclick="daftar(namaLengkap.value, jenisKelamin.value, provinsiKelahiran.value, kotaKelahiran.value, tanggalLahir.value, provinsi.value, kota.value, alamat.value, nomerTelphone.value, pekerjaan.value, email.value, password.value)">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>