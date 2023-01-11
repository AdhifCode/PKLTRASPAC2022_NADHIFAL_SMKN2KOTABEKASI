<template>
  <div class="kelas">
    <div class="judul">
      <h1>Dad Jokes</h1>
    </div>
    <v-card>
      <v-toolbar>
        <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn>
      <v-text-field class="nyari"
        v-model="cari"
        label="Search a Dad Jokes"
        single-line
        hide-details
        placehoder="Ni ai wo wo ai ni mi xue bing cheng tianmi mi ni ai wo wo ai ni"
      ></v-text-field>
      </v-toolbar>
  </v-card>
<div class="if" v-if="cari === null || cari === ''">
  <h3>Data not available</h3>
</div>

<div class="else" v-else>
  <h3>Result: {{ itemsResult.length }}</h3>


<div class="hasil" v-for="hy in itemsResult" :key="hy">
  <v-card>
  <v-card-text style="height:100px">{{ hy }}
  </v-card-text>
  </v-card>
  </div>
  </div>

  
  </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');
.kelas{
  margin: auto;
  align-items: center;
  width: 60%;
  margin-top: 32px;
  font-family: poppins;
}

.judul{
  text-align:center;
  font-size: 18px;
  margin-bottom: 27px;
  margin-top: 27px;
}

.if{
  margin: auto;
  text-align: center;
  margin-top: 61px;
  font-weight: 500;
}

.else{
  margin: auto;
  margin-top: 61px;
  margin-bottom: -8px;
}

.hasil{
  margin-top: 20px;
}


</style>

<script>

export default {
  name: 'IndexPage',
  data(){
    return{
      cari : null,
    itemsResult: [
      'Did you hear the one about the guy wiht the broken hearing aid? Neither did he',
      'Did you hear the one about the guy wiht the broken hearing aid? Neither did he',
      'Did you hear the one about the guy wiht the broken hearing aid? Neither did he',
      'Did you hear the one about the guy wiht the broken hearing aid? Neither did he'
    ]
    }
  }
}
</script>
