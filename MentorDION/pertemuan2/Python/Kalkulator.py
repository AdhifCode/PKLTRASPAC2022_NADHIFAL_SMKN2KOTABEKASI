print('---Kalkulator Sederhana---')

nilai_1 = int(input('Masukan Nilai Pertama : '))
hitung = input('Pilih Metode Hitung (+ Atau -): ')
nilai_2 = int(input('Masukan Nilai Kedua : '))

if hitung !='+' and hitung !='-' :
    print('Tidak Valid gan')
    exit()

#menghitung 
hitung_tambah = nilai_1 + nilai_2
hitung_kurang = nilai_1 - nilai_2

print('---Pembatas---')

#Output hasilnya
if hitung == '+':
    print('Hasilnya adalah : ' + str(hitung_tambah))
elif hitung == '-':
    print('Hasilnya adalah : ' + str(hitung_kurang))

#Selesai hayyukkk
print('--------------------------------------------------------------------------------------------------------------------------------------------------------------------Selesai---')