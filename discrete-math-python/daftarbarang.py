daftarbarang = [('TV-001',0),('TV-002',4)]

print('Daftar Stok Kosong')

for indeks in range (0, len(daftarbarang)):
    jumstok = daftarbarang[indeks][1]
    if jumstok == 0:
        kodebarang=daftarbarang[indeks][0]
        print(kodebarang)