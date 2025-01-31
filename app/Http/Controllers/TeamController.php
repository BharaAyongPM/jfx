<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Facade\FlareClient\Http\Client;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Support\Facades\Log;
use Laravolt\Indonesia\Indonesia;
use Laravolt\Indonesia\IndonesiaService;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indonesia = new IndonesiaService();
        $provinces = $indonesia->allProvinces();
        $teams = Team::all();
        return view('index', compact('teams', 'provinces'));
    }
    public function regis()
    {
        $indonesia = new IndonesiaService();
        $provinces = $indonesia->allProvinces();
        $teams = Team::all();
        return view('regristation', compact('teams', 'provinces'));
    }
    // public function searchProvince(Request $request)
    // {
    //     $term = $request->get('term');
    //     $provinces = IndonesiaService::searchProvince($term);

    //     return response()->json($provinces);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('Mulai proses penyimpanan pendaftaran.');

        // Validasi input
        try {
            $request->validate([
                'name' => 'required',
                'city' => 'required',
                'province_id' => 'required',
                'tournament' => 'required',
                'contact_name' => 'required',
                'contact_phone' => 'required',
                'tahun' => 'required',
            ]);
            Log::info('Validasi berhasil.', $request->all());
        } catch (\Exception $e) {
            Log::error('Validasi gagal: ' . $e->getMessage());
            return redirect('/')->with('error', 'Terjadi kesalahan dalam validasi input.');
        }

        // Simpan ke database
        try {
            $applicant = Team::create($request->all());
            Log::info('Data berhasil disimpan ke database.', ['id' => $applicant->id]);
        } catch (\Exception $e) {
            Log::error('Gagal menyimpan data ke database: ' . $e->getMessage());
            return redirect('/')->with('error', 'Gagal menyimpan pendaftaran.');
        }

        // Token API WhatsApp
        $token = 'fTr8T6n6uVMvcEfD76gs'; // Ganti dengan token Anda
        $client = new GuzzleHttpClient();

        // Kirim pesan WhatsApp
        try {
            Log::info('Mengirim pesan WhatsApp ke: ' . $applicant->contact_phone);

            $response = $client->post('https://api.fonnte.com/send', [
                'form_params' => [
                    'target' => $applicant->contact_phone,
                    'message' => "Terima kasih, $applicant->name! Pendaftaran Anda untuk Jakarta Football EXPO telah berhasil. Kami akan segera memverifikasi Pendaftaran Anda.",
                ],
                'headers' => [
                    'Authorization' => $token,
                ],
            ]);

            Log::info('Respon dari API WhatsApp: ', ['status_code' => $response->getStatusCode()]);

            if ($response->getStatusCode() === 200) {
                Log::info('Pesan WhatsApp berhasil dikirim.');
                return redirect()->route('teams.regis')->with('success', 'Pendaftaran berhasil! Pesan WhatsApp juga terkirim.');
            } else {
                Log::warning('Pesan WhatsApp gagal dikirim.');
                return redirect()->route('teams.regis')->with('error', 'Pendaftaran berhasil, tetapi pesan WhatsApp gagal dikirim.');
            }
        } catch (\Exception $e) {
            Log::error('Kesalahan saat mengirim pesan WhatsApp: ' . $e->getMessage());
            return redirect()->route('teams.regis')->with('error', 'Pendaftaran berhasil, tetapi terjadi kesalahan saat mengirim pesan WhatsApp.');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
