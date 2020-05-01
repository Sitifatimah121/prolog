linearList([],[]).
linearList(H,[H]) :- not(is_list(H)).
linearList([H|T],Z):- linearList(H,X), linearList(T,Y), append(X,Y,Z).

listPertama(10000).

tambah_vit :- 
    listPertama(X),
    listKedua(Y),
    R is (Y*500),
    write(X),
    write( ,),
    write(R).

jumlah_pesanan :- nl,
    listPertama(X),
    listKedua(Y),
    R is (Y*500),
    S is (X+R),
    write(S).

