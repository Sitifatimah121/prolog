# implementasi modul 6 (binary tree)
aturan(1,1,1,1,2,1,1).
aturan(1,1,1,1,1,1,1).
aturan(2,2,2,2,1,1,1).
aturan(3,1,2,2,2,1,1).

jawaban(1, ' Sepertinya Anda sedang mengalami gejala Flu').
jawaban(2, ' Sepertinya Anda sedang mengalami gejala Diare').
jawaban(3, ' Sepertinya Anda sedang mengalami gejala Anemia').

obat(1, ' Paracetamol').
obat(2, ' Diapet').
obat(3, ' Sangobion').

# implementasi modul 1 (pengenalan prolog)
harga_obat(1, 5000).
harga_obat(2, 4000).
harga_obat(3, 8000).

# implementasi modul logika
hasil_tes:-nl,
    pertama(X),
    kedua(Y),
    ketiga(Z),
    keempat(K),
    kelima(L),
    keenam(M),
    
    aturan(R,X,Y,Z,K,L,M),
    jawaban(R,A),
    write(A).

hasil_tes2:-nl,
    pertama(X),
    kedua(Y),
    ketiga(Z),
    keempat(K),
    kelima(L),
    keenam(M),
    
    aturan(R,X,Y,Z,K,L,M),
    jawaban(R,A),
    write(R).

hasil_tes3:-nl,
    pertama(X),
    kedua(Y),
    ketiga(Z),
    keempat(K),
    kelima(L),
    keenam(M),
    
    aturan(R,X,Y,Z,K,L,M),
    obat(R,A),
    write(A).

hasil_tes4:-nl,
    pertama(X),
    kedua(Y),
    ketiga(Z),
    keempat(K),
    kelima(L),
    keenam(M),
    
    aturan(R,X,Y,Z,K,L,M),
    harga_obat(R,A),
    write(A).

