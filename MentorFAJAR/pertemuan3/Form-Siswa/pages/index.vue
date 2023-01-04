<template>
  <div class="all">
    <div>
      <navbar />
    </div>
    <h1>Form Data Siswa</h1>
    <div class="form-isi">
      <!-- <form
        name="formPendaftaran"
        class="row g-3"
        method="post"
        onsubmit="return validateForm()"
      > -->
      <div class="col-12">
        <label for="inputNIS" class="form-label">NIS</label>
        <input
          type="number"
          name="nis"
          class="form-control"
          id="inputNIS"
          placeholder="NIS Mu"
          required
          minlength="8"
          v-model="nis"
        />
      </div>
      <div class="col-12">
        <label for="inputNama" class="form-label">Nama Siswa</label>
        <input
          type="text"
          name="nama"
          class="form-control"
          id="inputNama"
          placeholder="Nama Mu"
          required
          minlength="6"
          v-model="nama"
        />
      </div>
      <div class="col-12">
        <label for="inputAlamat" class="form-label">Alamat</label>
        <textarea
          v-model="alamat"
          type="text"
          name="alamat"
          class="form-control"
          id="inputAlamat"
          placeholder="Alamat Mu"
          required
          rows="4"
          cols="50"
        ></textarea>
      </div>
      <div class="col-12">
        <label for="inputTelp" class="form-label">Nomer Telp</label>
        <input
          type="number"
          name="nomor"
          class="form-control"
          id="inputTelp"
          minlength="15"
          maxlength="15"
          v-model="nomer"
        />
      </div>
      <div class="col-md-12">
        <label for="inputKelas" class="form-label">Kelas</label>
        <select
          id="inputKelas"
          name="kelas"
          class="form-control"
          v-model="kelas"
        >
          <option selected></option>
          <option value="XI RPL INDUSTRI">XI RPL INDUSTRI</option>
          <option value="XI RPL 1">XI RPL 1</option>
          <option value="XI RPL 2">XI RPL 2</option>
          <option value="XI RPL 3">XI RPL 3</option>
        </select>
      </div>
      <div class="row">
        <div class="col">
          <button type="reset" class="btn btn-danger" v-on:click="reset">
            Reset
          </button>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-primary" v-on:click="submit">
            Submit
          </button>
        </div>
      </div>

      <!-- </form> -->
    </div>
    <div class="output" v-if="set === true">
      <h1>Output</h1>
      <h4>NIS : {{ nis }}</h4>
      <h4>Nama : {{ nama }}</h4>
      <h4>Alamat : {{ alamat }}</h4>
      <h4>Nomor Telp : {{ nomer }}</h4>
      <h4>Kelas : {{ kelas }}</h4>
    </div>
  </div>
</template>

<style lang="pages/style.css">
@import url('https://fonts.googleapis.com/css2?family=Piazzolla:opsz@8..30&family=Sevillana&display=swap');
html{
  background: rgb(0, 149, 255);
}
.form-isi{
  border: 2px solid rgb(255, 255, 255);
  padding: 10px;
  border-radius: 20px;
}
.all h1 {
  font-family: 'Sevillana', cursive;
  padding-top: 20px;
  text-align: center;
  color: #fff;
  background: rgb(0, 149, 255);
}

.form-isi {
  position: absolute;
  top: 15%;
  left: 25%;
  background: rgb(0, 255, 251);
}

.output{
  position: absolute;
  top: 25%;
  left: 55%;
  background: rgb(0, 255, 251);
  border: 2px solid rgb(255, 255, 255);
  padding: 10px;
  border-radius: 20px;
  color: #fff;
}

.output h1{
  background: rgb(0, 255, 251);
}

.all{
  background: #6a11cb;
  background: -webkit-linear-gradient(
    to right,
    rgba(106, 17, 203, 1),
    rgba(37, 117, 252, 1)
  );
  background: linear-gradient(
    to right,
    rgba(106, 17, 203, 1),
    rgba(37, 117, 252, 1)
  );
}

.row{
  padding-top:10px;
  padding-left: 80px;
}
</style>

<script>
import { stringify } from "querystring";

export default {
  name: "IndexPage",
  data() {
    return {
      set: false,

      nis: null,
      nama: null,
      kelas: null,
      alamat: null,
      nomer: null,
    };
  },
  methods: {
    submit() {
      if (
        this.nis === "" ||
        this.nis === null ||
        this.nama === null ||
        this.kelas === null ||
        this.alamat === null ||
        this.nomer === null
      ) {
        alert("Data Belum Lengkap");
      } else {
        this.set = true;
      }
    },
    reset() {
      this.set = false;
      (this.nis = null),
        (this.nama = null),
        (this.kelas = null),
        (this.alamat = null),
        (this.nomer = null);
      alert("Data Ter Reset");
    },
  },
};
</script>
