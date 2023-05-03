<form action="proses-form-Input Mahasiswa.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div>
        <label>Nim</label> <br>
        <input type="text" nim="nim">
    </div>
    <div>
        <label>Email</label> <br>
        <input type="email" name="email">
    </div>
    <div>
        <label>Usia</label> <br>
        <input type="number" name="usia">
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal_lahir">
    </div>
    <div>
        <label>Alamat</label> <br>
        <textarea name="alamat"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="l"> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="p"> Perempuan
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Pekerjaan</label> <br>
        <select name="pekerjaan">
            <option value="guru">Guru</option>
            <option value="tidak bekerja">Tidak bekerja</option>
            <option value="ojol">Ojol</option>
        </select>
    </div>

    <div>
        <button>Submit</button>
    </div>
</form>