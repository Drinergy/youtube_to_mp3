<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class convertYT extends Controller
{
    public function index(){
        return view('content.index');
    }

    public function convert(Request $request) {

        // input values
        $inputValue = $request->all();

        // pass the input value to array $data
        $data = [
            'url' => $inputValue['url'],
            'quality' => $inputValue['quality'],
        ];

        // keys from env
        $apiKey = env('RAPID_API_KEY');
        $host = env('RAPID_API_HOST');
        try {

            $response = Http::withHeaders([
                'X-RapidAPI-Key' => $apiKey,
                'X-RapidAPI-Host' => $host
            ])->timeout(200)->get('https://youtube-mp3-downloader2.p.rapidapi.com/ytmp3/ytmp3/custom?' . http_build_query($data));

            $status = $response->status();
            $responseData = $response->json();
            $error = 'Please Try Again Later!';

            if($status === 200) {
                return view('content.download', [
                    'data' => $responseData,
                ]);
            } else {
                return redirect()->back()->withErrors($error)->withInput();
            }

        } catch (\Illuminate\Http\Client\RequestException $exception) {
            // Handle cURL timeout or connection errors
            return back()->with('error', 'The request timed out. Please try again later.');
        }

    }
}
