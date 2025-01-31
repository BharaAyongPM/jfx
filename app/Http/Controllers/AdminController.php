<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil hanya data dengan tahun 2025
        $applicants = Team::where('tahun', 2025)->get();

        return view('admin.index', compact('applicants'));
    }

    public function verify($id)
    {
        // Verifikasi pendaftar
        $applicant = Team::find($id);
        $applicant->update(['verified' => true]);
        $token = 'fTr8T6n6uVMvcEfD76gs'; // Ganti dengan token Anda

        $client = new Client();

        try {
            $response = $client->post('https://api.fonnte.com/send', [
                'form_params' => [
                    'target' => $applicant->contact_phone,
                    'message' => "Terima kasih, $applicant->name! Pendaftaran Anda untuk JFX - Jakarta Football EXPO Telah *TERVERIFIKASI* Kami akan segera menghubungi Anda.",
                ],
                'headers' => [
                    'Authorization' => $token,
                ],
            ]);

            // Cek respon WhatsApp
            if ($response->getStatusCode() === 200) {
                return redirect()->route('admin.index')->with('success', 'Pendaftaran berhasil! Pesan WhatsApp juga terkirim.');
            } else {
                return redirect()->route('admin.index')->with('error', 'Pendaftaran berhasil, tetapi pesan WhatsApp gagal dikirim.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.index')->with('error', 'Pendaftaran berhasil, tetapi terjadi kesalahan saat mengirim pesan WhatsApp.');
        }
    }
    public function detail($id)
    {
        $applicant = Team::find($id);

        return view('admin.detail', compact('applicant'));
    }
}
