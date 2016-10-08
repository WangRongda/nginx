test: test.c linkList.o 
	gcc -o test test.c linkList.o
linkList.o: linkList.h linkList.c
	gcc -c linkList.c -o linkList.o

clean:
	rm *.o test
