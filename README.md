# latihanLaravel
Latihan Laravel
Pada tutorial ini, penulis membuat CRUD biasa menggunakan laravel php. 
Yang pertama kali penulis lakukan adalah membuat proyek laravel. Setelah itu mengatur .env agar proyek terhubung dengan database. Penulis juga membuat database seeder agar data tersebut dapat terisi dengan mudah.
Lalu, penulis membuat file migration. File tsb berguna untuk membuat database sesuai dengan keinginan dan ketentuan pengguna. Penulis juga menambahkan route pada resource, membuat model, kelas controller, dan juga front-end-nya.
Penjelasan latihan yang dikerjakan adalah sebagai berikut:
- Kelas ModelKontak merupakan sebuah model. Model tersebut terhubung dengan database secara langsung dengan mebuat kode
"protected $table = 'kontak'"
- Lalu pada controller, kelas ModelKontak terhubung dengan controller dengan menggunakan "use App\ModelKontak". Pada controller terdapat beberapa method bawaan seperti create, index, delete, update, dll. Method-method tersebut ada yang mereturn sebuah front end dan mengeset data yang ada. Controller juga berfungsi untuk melakukan perubahan pada database (Pada java spring, controller berfungsi sebagai pengaturnya. perubahan pada database dilakukan pada mapper.). 
- Untuk menghubungkan frontend dengan backend. Penulis membuat sebuah web.php yang terletak di folder route. Berfungsi sebagai penghubung keduanya. Route::resource('kontak','KontakController') berguna untuk menghyperlink front end yang berurusan langsung dengan backend. Sedangkan Route::get('/', function(){}) berguna untuk menghyperlink front end yang berurusan langsung dengan frontend yang lain (biasanya bukan url bawaan dari controller). 

Cara kerja dari tiap bagian adalah:
- Index.
Penulis membuat halaman bernama kontak.blade.php sebagai index. Halaman tersebut terredirect secara otomatis karena penulis sudah meletakan perintah Route::resource('kontak','KontakController') pada route/web.php. Dengan perintah tersebut, maka laravel secara otomatis membuat url-nya. Jadi ketika penulis mengakses localchost:8000/kontak, maka controllor akan mengarahkan ke method yang memanggil url tersebut, yaitu method index. Pada controller terdapat perintah $data = ModelKontak::all() yang berguna untuk select all pada database dan menyimpannya ke dlm variabel. Method tersebut mengembalikan halaman kontak.blade.php beserta data yang diambil. Lalu Pada frontend terdapat perintah @foreach($data as $datas), fungsi tsb berguna untuk mengeloop data yang diambil.
- Show Detail
Penulis membuat halaman bernama kontak_show.blade.php sebagai view detail.  Jadi ketika penulis mengakses localchost:8000/kontak/{id}, maka controllor akan mengarahkan ke method yang memanggil url tersebut, yaitu method ahow. Method show memiliki perintah $data = ModelKontak::where('id',$id)->get() yang berfungsi untuk select kontak by id. Setelah itu, method tersebut mengembalikan halaman kontak_show.blade.php beserta data yang diambil. Lalu Pada frontend terdapat perintah @foreach($data as $datas), fungsi tsb berguna untuk mengeloop data yang diambil.
- Create
- Edit
- Delete
