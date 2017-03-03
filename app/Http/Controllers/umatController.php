<?php

namespace App\Http\Controllers;

use App\Http\Requests\TambahUmatRequest;
use App\Model\Keluarga;
use App\Model\Lingkungan;
use App\Model\Umat;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Mockery\Exception;

class umatController extends Controller
{
    //
    public function showData()
    {
        $lingkungan = Lingkungan::all();

        if(!isset($request)){
            $data = Umat::paginate(10);
        }

        return view('data.dataUmat', ['lingkungan' => $lingkungan, 'data' => $data]);
    }

    public function filterData(Request $request,$fLing=null, $fJK=null, $fUmur=null) {
        if(null !== $fLing)
        {
            $request->chkLingkungan = 1;
        }
        $lingkungan = Lingkungan::all();
//        dd($request);
        if($request->filters === 'all') {
            //No need to filter data
            $data = Umat::paginate(10);
//            $vi = view('data.dataUmat', ['lingkungan' => $lingkungan, 'data' => $data])->with(\Input::all());
//            dd('vi', $vi, 'request', $request,'inputs', \Input::all());
        }elseif($request->filters === 'filterData'){
            //Data harus di filter
            //get based on what the filter
            if(!isset($request->chkLingkungan)){
                $request->chkLingkungan = 0;
            }
            if(!isset($request->chkJenisKelamin)){
                $request->chkJenisKelamin = 0;
            }
            if(!isset($request->chkUmur)){
                $request->chkUmur = 0;
            }

            //sanity check for range umur
            if($request->chkUmur){
                if($request->umurAwal > $request->umurAkhir){
                    $ua = $request->umurAwal;
//                    dd($ua);
                    $request->umurAwal = $request->umurAkhir;
                    $request->umurAkhir = $ua;

                }elseif($request->umurAwal == $request->umurAkhir){
                    $request->umurAkhir = $request->umurAwal +1;
                }
                //getting date range
                $tanggalAwal = \Carbon\Carbon::now()->subYears($request->umurAkhir);
                $tanggalAkhir = \Carbon\Carbon::now()->subYear($request->umurAwal);
//                dd($request->umurAwal, $request->umurAkhir);
            }
            if(!$request->chkLingkungan && !$request->chkJenisKelamin && !$request->chkUmur){
//                dd('No Filter Used');
                $data = Umat::paginate(10);

            }elseif($request->chkLingkungan && !$request->chkJenisKelamin && !$request->chkUmur){
//                dd('Only Lingkungan Should Be filtered');
//                dd($request);
                $data = Umat::where('id_lingkungan', $request->namaLingkungan)->paginate(10);
            }elseif(!$request->chkLingkungan && $request->chkJenisKelamin && !$request->chkUmur){
//                dd('Only JK Should Be filtered');
                $data = Umat::where('jk', $request->jenisKelamin)->paginate(10);
            }elseif(!$request->chkLingkungan && !$request->chkJenisKelamin && $request->chkUmur){
//                dd('Only Umur Should Be filtered');
                $data = Umat::whereBetween('tanggal_lahir', [$tanggalAwal, $tanggalAkhir])
                    ->paginate(10);
            }elseif($request->chkLingkungan && $request->chkJenisKelamin && !$request->chkUmur){
//                dd('Only Lingkungan And JK Should Be filtered');
                $data = Umat::where('jk', $request->jenisKelamin)
                        ->where('id_lingkungan',$request->namaLingkungan)
                        ->paginate(10);

            }elseif($request->chkLingkungan && !$request->chkJenisKelamin && $request->chkUmur){
//                dd('Only Lingkungan and Umur Should Be filtered');
                $data = Umat::where('id_lingkungan',$request->namaLingkungan)
                    ->whereBetween('tanggal_lahir',[$tanggalAwal, $tanggalAkhir])
                    ->paginate(10);

            }elseif(!$request->chkLingkungan && $request->chkJenisKelamin && $request->chkUmur){
//                dd('Only JK and Umur Should Be filtered');
                $data = Umat::where('jk', $request->jenisKelamin)
                    ->whereBetween('tanggal_lahir',[$tanggalAwal, $tanggalAkhir])
                    ->paginate(10);

            }elseif($request->chkLingkungan && $request->chkJenisKelamin && $request->chkUmur){
//                dd('All Should Be filtered');
//                dd($request);

                $data = Umat::where('id_lingkungan', $request->namaLingkungan)
                        ->where('jk', $request->jenisKelamin)
                        ->whereBetween('tanggal_lahir', [$tanggalAwal, $tanggalAkhir])
                        ->paginate(10);

            }
        }elseif($request->filters === 'cariNama') {
            //check if nama umat diisi
            if($request->namaUmat === '') {
                $data = Umat::paginate(10);
//                dd('No nama Umat', $request);
            }

            if($jumlahKata = str_word_count($request->namaUmat) > 1){
                //call data with or where
                $kataNama = str_word_count($request->namaUmat,1);

                $data = Umat::where('nama_depan','like','%'.$kataNama[0].'%')
                        ->where('nama_belakang','like','%'.$kataNama[1].'%')
                        ->orWhere(function($query) use ($kataNama){
                            $query->where('nama_depan','like','%'.$kataNama[1].'%')
                                ->where('nama_belakang','like','%'. $kataNama[0].'%');
                        })->paginate(10);

            }else{
                $data = Umat::where('nama_depan','like','%'.$request->namaUmat.'%')
                    ->orWhere('nama_belakang','like','%'.$request->namaUmat.'%')
                    ->paginate(10);
            }


//            dd($request->namaUmat, old('namaUmat'));
        }else{
//        dd( 'No Filters' , $request);
            $data = Umat::paginate(10);
        }
//        dd($request);
        $request->flashExcept('_token');
//        dd(\Session::all());
//        dd('inputs: ', \Input::all());
        return view('data.dataUmat', ['lingkungan' => $lingkungan, 'data' => $data])->with(\Input::all());
    }

    public function showFormTambahUmat()
    {
        //getting lingkungan data
        $lingkungan = Lingkungan::all();
        $keluarga = Keluarga::all();
        return view('forms.tambahUmat', ['ling' => $lingkungan, 'kel' => $keluarga]);
    }

    public function prosesTambahUmat(TambahUmatRequest $request){
        //get the max id at present
        $latestID = Umat::max('id_umat');
        $newID = $latestID + 1;
        dd($request, $newID, \Input::file());

        //adding the new umat
        //if its kepala keluarga
        if(isset($request->kepalaKeluarga)) {
            try {
                //first create new keluarga
                $latestKel = Keluarga::max('id_keluarga');
                $newKelID = $latestKel +1;

                Keluarga::create([
                    'id_keluarga'   => $newKelID,
                    'id_kk'         => $newID,
                    'id_lingkungan' => $request->lingkungan,
                ]);

                //making the umat
                //then create the umat
                Umat::create([
                    'id_umat'       => $newID,
                    'nama_depan'    => $request->namaDepan,
                    'nama_belakang' => $request->namaBelakang,
                    'jk'            => $request->jk,
                    'tempat_lahir'  => $request->tempatLahir,
                    'tanggal_lahir' => $request->tanggalLahir,
                    'alamat'        => $request->alamat,
                    'no_telp'       => $request->noTelp,
                    'id_keluarga'   => $newKelID,
                    'id_lingkungan' => $request->lingkungan,
                    'path_gambar'   => $request->umatImage
                ]);
            } catch (Exception $e) {
                return $e;
            }
        } else{
            //if its not kepala keluarga
            try{
                Umat::create([
                    'id_umat'       => $newID,
                    'nama_depan'    => $request->namaDepan,
                    'nama_belakang' => $request->namaBelakang,
                    'jk'            => $request->jk,
                    'tempat_lahir'  => $request->tempatLahir,
                    'tanggal_lahir' => $request->tanggalLahir,
                    'alamat'        => $request->alamat,
                    'no_telp'       => $request->noTelp,
                    'id_keluarga'   => $request->keluarga,
                    'id_lingkungan' => $request->lingkungan,
                    'path_gambar'   => $request->umatImage
                ]);
            }catch(Exception $e){
                return $e;
            }
        }

        //if we reaches this point, then all is good. new umat has been created
        return redirect()->route('dataUmatAdmin');

    }

    public function uploadImage()
    {
        // getting all of the post data
        $file = array('image' => \Input::file('image'));
        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else {
            // checking file is valid.
            if (Input::file('image')->isValid()) {
                $destinationPath = 'temp'; // upload path
                $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111, 99999) . '.' . $extension; // renaming image
                Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message
                Session::flash('success', 'Upload successfully');
                return Redirect::to('upload');
            } else {
                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                return Redirect::to('upload');
            }
        }
    }
}
