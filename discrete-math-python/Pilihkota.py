tabel = [['Baden', 'Austria'],
        ['Bandung', 'Indonesia'],
        ['Bogor', 'Austria'],
        ['Graz', 'Austria']]

print('Daftar kotsa disuatu negara')
print('---------------------------')

namanegara = input ('nama negara:')

jumkota = 0
for indeks in range (0, len(tabel)):
    if namanegara.lower() == tabel[indeks][1].lower():
        jumkota +=1

        print (tabel[indeks][0])

print()
if jumkota == 0:
    print ('Data Tidak Ditemukan')
else:
    print ('Jumlah Kota :' , jumkota)        