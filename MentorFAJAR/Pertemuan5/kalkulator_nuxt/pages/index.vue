<template>
<div>
  <div class="card">
    <div class="container">
      <select id="metode" v-model="metode">
        <optgroup label="Pilih Aritmatika">
      <option value="jumlahan">Penjumlahan</option>
      <option value="kurangan">Pengurangan</option>
      <option value="kalian">Perkalian</option>
      <option value="bagian">Pembagian</option>
      <option value="modulo">Modulo</option>
          </optgroup>
      </select>
    </div>
    <div class="row">
      <input type="number" v-model="angka1" placeholder="Masukan Bilangan">
    </div>
    <div class="row">
      <input type="number" v-model="angka2" placeholder="Masukan Bilangan">
    </div>
    <div class="row submitan">
      <div class="submit">
        <input @click.prevent="submit()" type="submit" value="Submit"/>
    </div>
    </div>
    <div v-if="this.set === true" class="hasil">
      <h3>Hasil : {{ hasil }}</h3>
    </div>
  </div>
</div>
</template>

<script>
export default {
  layout : 'layoutme',
  name: 'IndexPage',
  data() {
    return {
      set : false,

      angka1 : null,
      angka2 : null,
      metode : null,
      hasil : null
    };
  },
  methods: {
    submit() {
    if(this.angka1 === null || this.angka2 === null || this.angka1 === '' || this.angka2 === ''){
      alert("Input Belum Benar")
    } else {
      if(this.metode === null || this.metode === ''){
        alert("Piliha Metode Dahulu");
      }
    else if(this.metode === 'jumlahan'){
      this.hasil = parseInt(this.angka1) + parseInt(this.angka2);
      this.set = true;
    }  
    else if(this.metode === 'kurangan'){
      this.hasil = parseInt(this.angka1) - parseInt(this.angka2);
      this.set = true;
    }  
    else if(this.metode === 'kalian'){
      this.hasil = parseInt(this.angka1) * parseInt(this.angka2);
      this.set = true;
    }  
    else if(this.metode === 'bagian'){
      this.hasil = parseInt(this.angka1) / parseInt(this.angka2);
      this.set = true;
    }  
    else if(this.metode === 'modulo'){
      this.hasil = parseInt(this.angka1) % parseInt(this.angka2);
      this.set = true;
    }  
    }
    
},
  },
}
  
</script>
