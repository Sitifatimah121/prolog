kedua(1).

ketiga(1, 5000).
ketiga(2, 3000).
ketiga(3, 8000).

hitung_harga:-nl,
    pertama(X),
    kedua(A),
    ketiga(A,B),
    R is (X*B),
    write(R).


