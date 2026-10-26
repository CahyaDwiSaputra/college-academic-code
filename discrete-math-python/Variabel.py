ekuiv = True

print(f'| {"p":^8s} | {"q":^8s} | {"a":^10s} | {"b":^10s} |')
for p in [True, False]:
    for q in [True, False]:
        a = p or not (p or q)
        b = p or not q

        if a != b and ekuiv == True:
            ekuiv = False

        print(f'| {p!s:8} | {q!s:8} | {a!s:10} | {b!s:10} |')

print()
if ekuiv == True:
    print('a dan b ekuivalen secara logika')
else:
    print('a dan b tidak ekuivalen secara logika')