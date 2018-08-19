# latihanLaravel
Latihan Laravel
Pada tutorial ini, penulis membuat CRUD biasa menggunakan laravel php. 
Yang pertama kali penulis lakukan adalah membuat proyek laravel. Setelah itu mengatur .env agar proyek terhubung dengan database. Penulis juga membuat database seeder agar data tersebut dapat terisi dengan mudah.
Lalu, penulis membuat file migration. File tsb berguna untuk membuat database sesuai dengan keinginan dan ketentuan pengguna. Penulis juga menambahkan route pada resource, membuat model, kelas controller, dan juga front-end-nya.
Cara kerja dari latihan yang dikerjakan adalah sebagai berikut:
- Kelas ModelKontak merupakan sebuah model. Model tersebut terhubung dengan database secara langsung dengan mebuat kode
"protected $table = 'kontak'"
- Lalu pada controller, kelas ModelKontak terhubung dengan controller dengan menggunakan "use App\ModelKontak". Pada controller terdapat beberapa method bawaan seperti create, index, delete, update, dll. Method-method tersebut ada yang mereturn sebuah front end dan mengeset data yang ada. 
- Untuk menghubungkan frontend dengan backend. Penulis membuat sebuah web.php yang terletak di folder route. Berfungsi sebagai penghubung keduanya. Route::resource('kontak','KontakController') berguna untuk menghyperlink front end yang berurusan langsung dengan backend. Sedangkan Route::get('/', function(){}) berguna untuk menghyperlink front end yang berurusan langsung dengan frontend yang lain. 
