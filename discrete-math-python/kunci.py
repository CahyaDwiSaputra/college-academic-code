warna = { 'red': '30', 'blue': '10',
          'green': '20', 'white': '40', 'yellow': '50' }

print('Sebelum diurutkan menurut kunci:')
for kunci in warna:
    print('%-6s:%-s'% (kunci, warna[kunci]))

print()
print('Sesudah diurutkan menurut kunci:')
daftarkunci = warna.keys()
for kunci in sorted(daftarkunci):
    print('%-6s:%-s'% (kunci, warna[kunci]))