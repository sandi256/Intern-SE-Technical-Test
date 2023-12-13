# Intern-SE-Technical-Test

## Language 
> PHP

## Task
#### 1. A000124 of Sloane’s OEIS 
#### 2. Dense Ranking
#### 3. Balanced Bracket
Ukuran Kompleksitas:

- Waktu: O(n) - Kompleksitas waktu linier, di mana n adalah panjang ekspresi.
- Ruang: O(n) - Kompleksitas ruang linier, di mana n adalah panjang ekspresi.

Detail Kompleksitas Codingan:

- Kompleksitas waktu O(n) disebabkan oleh loop yang memeriksa setiap karakter dalam ekspresi satu kali.
- Kompleksitas ruang O(n) disebabkan oleh penggunaan stack, yang dapat memiliki sekitar n elemen dalam skenario terburuk (misalnya, "((((...)))").
- Pemanggilan fungsi array_push dan array_pop pada stack memiliki kompleksitas O(1) karena stack diimplementasikan sebagai array.
- Kodingan ini dirancang untuk efisien dalam memeriksa keseimbangan tanda kurung pada ekspresi secara linier.



