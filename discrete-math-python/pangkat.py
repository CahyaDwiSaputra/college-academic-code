def pangkat (x, n):
    if n==1:
        return x
    else:
        return x*pangkat (x, n-1)
    
print('5^2=', pangkat(5,2))
print('2^8=', pangkat(2,8))