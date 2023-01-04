<template>
  <body>
    <div class="first" id="HOME">
      <div class="wrapper">
        <div class="bg-atas"></div>
        <div class="grup-about">
          <div class="judul">
            <h1>TIMWOK</h1>
          </div>
          <div class="about">
            <p>
              We are the students from Vocational Highschool 2<br />
              Bekasi City, Software Engineering Department. Recently,<br />
              we became an internship participant at TRASPAC
            </p>
            <a href="#LIST" class="button">View Team</a>
          </div>
        </div>
        <div class="bg-bawah"></div>
      </div>
    </div>
    <div class="last" id="LIST">
      <h1>Members Of The Team</h1>
      <div class="grup-member">
        <div class="satu">
          <img src="assets/Del.png" height="200px" width="200px" alt="" />
          <h1>Delshady Rachmadina</h1>
          <p>
            Saya merupakan siswi SMKN 2 Kota Bekasi dengan jurusan Rekayasa
            Perangkat Lunak yang sedang melaksanakan Praktek Kerja Lapangan di
            TRASPAC. Saya tertarik dengan design dan perkembangan dunia digital,
            dengan ketertarikan saya ini membuat saya senang untuk mempelajari
            hal-hal baru yang belum saya kuasai.
          </p>
        </div>
        <div class="dua">
          <img src="assets/Ja.png" height="200px" width="200px" alt="" />
          <h1>Izanagi Faris Aslam</h1>
          <p>
            Perkenalkan nama saya Izanagi faris aslam, Siswa dari SMKN 2 Kota
            Bekasi dengan jurusan Rekayasa Perangkat Lunak yang sedang
            melaksanakan Praktek Kerja Lapangan di TRASPAC. Saya merupakan
            seseorang yang tertarik dengan dunia Software Engineer dan senang
            belajar hal-hal baru
          </p>
        </div>
        <div class="tiga">
          <img src="assets/Dhif.png" height="200px" width="200px" alt="" />
          <h1>Nadhifal Azharuddiya A</h1>
          <p>
            Seorang Siswa Kelas Unggulan RPL Di SMKN2 Kota Bekasi yang memiliki
            kemampuan Design, Developing, Gaming, Coding dan Pemasaran dalam
            beberapa platform. Memiliki pengalaman dalam organisasi dan mampu
            bekerja dalam tim
          </p>
        </div>
      </div>
      <a href="#HOME" class="button">Back To Home</a>
    </div>
  </body>
</template>
<style>
/* Font Link */
@import url("https://fonts.googleapis.com/css2?family=Piazzolla:opsz@8..30&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=The+Nautigal:wght@400;700&display=swap");
:root {
  --lightcoffee-color: #d7d0c2;
  --coffee-color: #c5b796;
  --white-color: #fff;
  --black-color: #000000;
}

::-webkit-scrollbar {
  display: none;
}

body {
  margin: 0;
  font-family: "Poppins", sans-serif;
  background-color: var(--lightcoffee-color);
}

.bg-atas {
  background-color: var(--lightcoffee-color);
  height: 6vw;
  border-bottom-left-radius: 100%;
  border-bottom-right-radius: 100%;
  box-shadow: 0px 100px 80px rgba(0, 0, 0, 0.052963),
    0px 64.8148px 46.8519px rgba(0, 0, 0, 0.0863704),
    0px 38.5185px 25.4815px rgba(0, 0, 0, 0.11),
    0px 20px 13px rgba(0, 0, 0, 0.13363),
    0px 8.14815px 6.51852px rgba(0, 0, 0, 0.167037),
    0px 1.85185px 3.14815px rgba(0, 0, 0, 0.22);
}

.bg-bawah {
  background-color: #cbc6b9;
  height: 8vw;
  border-top-left-radius: 100%;
  border-top-right-radius: 100%;
  margin-top: 78px;
}

.wrapper {
  max-width: 100%;
  margin: 0 auto;
}

/* HOME */

.first {
  /* BackGround */
  background-image: url(assets/Background.png);
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /* Bkn Background Lagi */
  height: 1100px;
  width: 100%;
  align-items: center;
  justify-content: space-between;
  color: var(--white-color);
}

.button {
  padding: 16px 48px;
  font-family: "Poppins";
  border-radius: 12px;
  border-color: #ffffff;
  border-style: solid;
  border-width: 5px;
  color: #fff;
  background: transparent;
  display: inline-block;
  font-weight: 500;
  font-size: 20px;
  text-decoration: none;
}

.judul {
  font-family: "Poppins";
  font-style: normal;
  font-weight: 700;
  font-size: 28px;
  line-height: 60px;
  text-align: center;
  color: #ffffff;
}

.grup-about {
  margin-top: 220px;
}

.about {
  font-family: "Poppins";
  text-align: center;
  font-style: normal;
  padding-top: 8px;
}

.about h1 {
  font-size: 40px;
  font-family: Poppins, sans-serif;
  font-weight: 700;
}

.about a {
  margin-top: 126px;
  font-size: 20px;
  font-family: Poppins, sans-serif;
  font-weight: 700;
}

.about p {
  margin-top: 125px;
  font-size: 20px;
  font-family: Poppins, sans-serif;
  font-weight: 500;
}

/* LIST */

.last {
  width: 100%;
  height: 100vh;
  background: var(--lightcoffee-color);
}

.last h1 {
  font-size: 64px;
  font-family: Poppins, sans-serif;
  font-weight: 700;
  color: var(--white-color);
  text-align: center;
}

.grup-member {
  display: grid;
  grid-template-columns: auto auto auto;
}

.grup-member h1 {
  font-size: 20px;
  font-family: Poppins, sans-serif;
  font-weight: 700;
}

.grup-member p {
  text-align: center;
}
</style>
