<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function tentang()
    {
        return view('guest.tentang');
    }

    public function kontak()
    {
        return view('guest.kontak');
    }

    public function kirimPesan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Logic untuk mengirim email atau menyimpan pesan
        // ...

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function faq()
    {
        $faqs = [
            [
                'pertanyaan' => 'Apa itu Posyandu?',
                'jawaban' => 'Posyandu adalah pos pelayanan terpadu untuk kesehatan ibu dan anak.'
            ],
            // ... tambahkan FAQ lainnya
        ];

        return view('guest.faq', compact('faqs'));
    }

    public function bantuan()
    {
        return view('guest.bantuan');
    }
}
