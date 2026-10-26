data = [('Jasmine', 'Wanita', 90),
        ('Cacan', 'Wanita', 85),
        ('Cahya', 'Pria', 95),
        ('Rama', 'Pria', 80),
        ('Syafi', 'Pria', 85)]

hasil = sorted(data, key=lambda x: x[2], reverse = True)

print('******************************')
for indeks in range(0, 3):
    nama = hasil[indeks][0]
    nilai = format(hasil[indeks][2], ',d') 
    nilai = nilai.replace(',', '.')

    print('%-15s: %12s' % (nama, nilai))

jeniskelamin = input ('jenis kelamin:')

jumanak = 0
for indeks in range (0, len(data)):
    if jeniskelamin.lower() == data[indeks][1].lower():
        jumanak +=1

        print (data[indeks][0])

    print()
if jumanak == 0:
    print ('Data Tidak Ditemukan')
else:
    print ('Jumlah Anak :' , jumanak)  