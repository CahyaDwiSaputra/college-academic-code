data = [('Jasmine', 'Wanita', 'Karanganyar', 90),
        ('Cacan', 'Wanita', 'Ponorogo', 85),
        ('Cahya', 'Pria', 'Ponorogo', 95),
        ('Rama', 'Pria', 'Caruban', 80),
        ('Syafi', 'Pria', 'Pacitan', 85)]

hasil = sorted(data, key=lambda x: x[3], reverse=True)

print('******************************')
for indeks in range(0, 3):
    nama = hasil[indeks][0]
    nilai = format(hasil[indeks][3], ',d') 
    nilai = nilai.replace(',', '.')

    print('%-15s: %12s' % (nama, nilai))

def cari_jenis_kelamin(jenis_kelamin, data):
    jumanak = 0
    for indeks in range(0, len(data)):
        if jenis_kelamin.lower() == data[indeks][1].lower():
            jumanak += 1
            print(data[indeks][0])
    print()
    
    if jumanak == 0:
        print('Data Tidak Ditemukan')
    else:
        print(f'Jumlah {jenis_kelamin} : {jumanak}')

def cari_kota(kota_asal, data):
    jumanak = 0
    for indeks in range(0, len(data)):
        if kota_asal.lower() == data[indeks][2].lower():
            jumanak += 1
            print(data[indeks][0])
    print()
    
    if jumanak == 0:
        print('Data Tidak Ditemukan')
    else:
        print(f'Jumlah dari kota {kota_asal} : {jumanak}')

print("\nPilih opsi pencarian:")
print("1. Cari berdasarkan Jenis Kelamin")
print("2. Cari berdasarkan Kota Asal")

pilihan = input("Masukkan pilihan (1/2): ")

if pilihan == '1':
    jeniskelamin = input('Jenis kelamin (Pria/Wanita): ')
    cari_jenis_kelamin(jeniskelamin, data)
elif pilihan == '2':
    kota_asal = input('Masukkan kota asal: ')
    cari_kota(kota_asal, data)
else:
    print("Pilihan tidak valid.")