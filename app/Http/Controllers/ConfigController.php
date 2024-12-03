<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('config');
        // $client = new Client();
        // // $url ='https://disease.sh/v3/covid-19/historical/all?lastdays=all';
        // $response = $client->request('GET', $url);
        // $content= $response->getBody()->getContents();
        // $contentArray = json_decode($content, true);
        // $cases = isset($contentArray['cases']) && is_array($contentArray['cases']) ? $contentArray['cases'] : [];
        // $deaths = isset($contentArray['deaths']) && is_array($contentArray['deaths']) ? $contentArray['deaths'] : [];
        // $keys = array_keys($contentArray);  // Mengambil key dari array pertama

        // // Menampilkan key di view
        // return view('config', ['cases' => $cases, 'deaths' => $deaths, 'keys' => $keys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $url = "https://jsonplaceholder.typicode.com/posts/{$id}";

        // Kirim permintaan DELETE menggunakan Laravel HTTP Client
        $response = Http::delete($url);

        // Cek respons dari API
        if ($response->successful()) {
            return response()->json([
                'message' => 'Data berhasil dihapus',
                'response' => $response->json()
            ], 200);
        }

        return response()->json([
            'message' => 'Gagal menghapus data',
            'error' => $response->body()
        ], $response->status());
    }
    
    public function uploadCSV(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Validasi tipe file
            if ($file->getClientOriginalExtension() !== 'csv') {
                return response('Invalid file type. Please upload a CSV file.', 400);
            }

            // Baca isi file
            $csvContent = file_get_contents($file->getRealPath());

            // Kembalikan isi file ke client
            return response($csvContent, 200)
                ->header('Content-Type', 'text/plain');
        }

        return response('No file uploaded.', 400);
    }
}



