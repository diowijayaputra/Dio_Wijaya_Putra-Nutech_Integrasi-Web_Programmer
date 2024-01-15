<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Kategori;
use App\Models\Produk;

class DioController extends Controller
{
    public function profile(Request $request)
    {
        $data = $request->validate([
            'id_user' => 'required',
            'profile_picture' => 'required|max:100',
            'name' => 'required',
            'position' => 'required',
            'password' => 'required',
        ]);

        $file = $request->file('pp_file');

        if ($file->getSize() > 100000) {
            return $file->getSize();
            return redirect('/')->with('error', 'File size should not exceed 100KB');
        } else {
            date_default_timezone_set("Asia/Bangkok");
            $randNumber = rand(000000, 999999);
            $pp = 'profile-' . $randNumber . '-' . date("H_i_s") . $file->getClientOriginalName();

            $data['id_user'] = "profileID-" . $randNumber;
            $data['profile_picture'] = $pp;

            $file->move(public_path('uploads'), $pp);

            Produk::create($data);

            return redirect('/')->with('success', 'Data inserted successfully!');
        }
    }

    public function addProduct(Request $request)
    {
        $data = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'stok_produk' => 'required',
            'foto_produk' => 'required|max:100',
        ]);

        $file = $request->file('pp_file');

        if ($file->getSize() > 100000) {
            return $file->getSize();
            return redirect('/')->with('error', 'File size should not exceed 100KB');
        } else {
            date_default_timezone_set("Asia/Bangkok");
            $randNumber = rand(000000, 999999);
            $pp = 'fotoproduk-' . $randNumber . '-' . date("H_i_s") . $file->getClientOriginalName();

            $data['foto_produk'] = $pp;

            $file->move(public_path('upload_produk'), $pp);

            Produk::create($data);

            return redirect('/')->with('success', 'Data inserted successfully!');
        }
    }

    public function admin(Request $request, $username, $password)
    {
        $users = Profile::where('name', $username)->get();
        $userData = response()->json($users)->getData();

        if (count($userData) > 0) {
            foreach ($users as $user) {
                $user_idVal = $user->id_user;
                $passVal = $user->password;

                if ($password != $passVal) {
                    return 1;
                } else {
                    return $user_idVal;
                    session()->put('id_user', $user_idVal);
                }
            }
        } else {
            return 0;
        }
    }

    public function adminUsername(Request $request, $user_id)
    {
        $user = Profile::where('id_user', $user_id)->get('id_user');
        return response()->json($user);
    }

    public function profileData(Request $request, $user_id)
    {
        $user = Profile::where('id_user', $user_id)->first(['profile_picture', 'name', 'position']);
        return response()->json($user);
    }

    public function session()
    {
        session()->forget('id_user');
    }

    public function getCategory()
    {
        $kategori = Kategori::all();
        return response()->json($kategori);
    }

    public function getProduk()
    {
        $produk = Produk::all();
        return response()->json($produk);
    }

    public function getOneProduk(Request $request, $id_produk)
    {
        $produkOne = Produk::where('id', $id_produk)->get();
        return response()->json($produkOne);
    }

    public function getSomeProduk($nama_produk)
    {
        $someProduk = Produk::where('nama_produk', $nama_produk)->get('nama_produk');
        return response()->json($someProduk);
    }

    public function getCat(Request $request, $catType)
    {
        $getCatType = Produk::where('kategori', $catType)->get();
        return response()->json($getCatType);
    }

    public function searchProduct(Request $request, $keyword)
    {
        $getProduk = Produk::where('nama_produk', 'LIKE', '%' . $keyword . '%')->orderBy('nama_produk')->get();
        return response()->json($getProduk);
    }

    public function searchProduk(Request $request, $keyword, $kategori_produk)
    {
        $getProduk = Produk::where('nama_produk', 'LIKE', '%' . $keyword . '%')->where('kategori', $kategori_produk)->orderBy('nama_produk')->get();
        return response()->json($getProduk);
    }

    public function searchkategoriProduk(Request $request, $kategori_produk)
    {
        $getProduk = Produk::where('kategori', $kategori_produk)->get();
        return response()->json($getProduk);
    }

    public function editProduct(Request $request, $id)
    {
        $data = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'stok_produk' => 'required',
            'foto_produk' => 'required|max:100',
        ]);

        $file = $request->file('pp_file');

        if ($file->getSize() > 100000) {
            return $file->getSize();
            return redirect('/')->with('error', 'File size should not exceed 100KB');
        } else {
            date_default_timezone_set("Asia/Bangkok");
            $randNumber = rand(000000, 999999);
            $pp = 'fotoproduk-' . $randNumber . '-' . date("H_i_s") . $file->getClientOriginalName();

            $data['foto_produk'] = $pp;

            $file->move(public_path('upload_produk'), $pp);

            $editProduk = Produk::where('id', $id);

            if ($editProduk) {
                $editProduk->update($data);
                return response()->json(['message' => 'Data updated successfully']);
            } else {
                return response()->json(['message' => 'Data not found'], 404);
            }
        }
    }

    public function deleteProduct(Request $request, $id)
    {
        $data = $request->validate([
            'id' => 'required',
        ]);

        $deleteQueue = Produk::where('id', $id);

        if ($deleteQueue) {
            $deleteQueue->delete($data);
            return response()->json(['message' => 'Data deleted successfully']);
        } else {
            return response()->json(['message' => 'Data not found'], 404);
        }
    }
}
