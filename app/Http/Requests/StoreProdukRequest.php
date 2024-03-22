<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Http\FormRequest;
use PDOException;

class StoreProdukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_produk' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'nama_produk.required' => 'Data nama produk belum diisi!'
        ];
    }

        public function store(StoreProdukRequest $request)
    {
        //eror handling
        try{
            DB::beginTransaction(); //mulai transaksi
            Produk::create($request->all()); //query input ke tabel

            DB::commit(); //nyimpan data ke db

            //untuk merefresh ke halaman itu kembali untuk melihat hasil input
            return redirect('produk')->with('success',"Input data berhasil");

        }catch(QueryException | Exception | PDOException $error){
            DB::rollBack();
            $this->failResponses($error->getMessage(), $error->getCode());
        }
    }
}
