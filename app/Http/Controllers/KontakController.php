<?php
namespace App\Http\Controllers;

use App\ModelKontak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelKontak::all();
		//mengembalikan halaman kontak.blade.php beserta data yang di add atribute.
        return view('kontak',compact('data'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   {
       return view('kontak_create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
	    //$data = new ModelKontak();
		request()->validate([
            'nama' => 'required',
            'email' => 'required',
			'nohp' => 'required',
			'alamat' => 'required'
        ]);
		ModelKontak::create($request->all());
		//dd($data);
		//$data->save();
        return redirect()->route('kontak.index')
                        ->with('success','Product created successfully.');
       /*$data = new ModelKontak();
       $data->nama = $request->nama;
       $data->email = $request->email;
       $data->nohp = $request->nohp;
       $data->alamat = $request->alamat;
       $data->save();
       return redirect()->route('kontak.index')->with('alert-success','Berhasil Menambahkan Data!');*/
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$data = ModelKontak::where('id',$id)->get();
		return view('kontak_show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit($id)
    {
        $data = ModelKontak::where('id',$id)->get();
        return view('kontak_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ModelKontak::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasil diubah!');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelKontak::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasi dihapus!');
}
}
