ketiga(1, 5000).
ketiga(2, 3000).
ketiga(3, 8000).

# implementasi modul aritmatka
hitung_harga:-nl,
    pertama(X),
    kedua(A),
    ketiga(A,B),
    R is (X*B),
    write(R).


