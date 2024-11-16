<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller 
{
    public function submitPayment(Request $request)
    {
        // Validasi input
        $request->validate([
            'payment_amount' => 'required|numeric',
            'jenis_sim' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        // Pastikan pengguna sudah login
        if (Auth::check()) {
            $transaction = new Transaction();
            $transaction->user_id = Auth::id(); // Mengambil ID pengguna yang sedang login
            $transaction->payment_amount = $request->input('payment_amount');
            $transaction->jenis_sim = $request->input('jenis_sim');
            $transaction->payment_method = $request->input('payment_method');
            $transaction->save();

            // Redirect setelah transaksi berhasil disimpan
            return redirect()->route('transaction.show', ['id' => $transaction->id]);
        } else {
            return response()->json(['error' => 'User not authenticated.'], 401);
        }
    }

    public function showPaymentProof()
    {
        $user = Auth::user();
    
        // Pastikan pengguna terautentikasi
        if (!$user) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }
    
        // Ambil transaksi terbaru dengan alternatif pemeriksaan
        $transaction = Transaction::where('user_id', $user->id)->latest()->first();
    
        // Pastikan data transaksi ditemukan
        if (!$transaction) {
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }
    
        // Kirim data transaksi ke view
        return view('payment-proof', compact('transaction'));
    }
    public function storePayment(Request $request)
{
    // Pastikan pengguna sudah login
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
    }

    // Validasi data yang diupload
    $request->validate([
        'payment_proof' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'payment_amount' => 'required|numeric',
        'payment_method' => 'required|string',
    ]);

    try {
        // Simpan file bukti pembayaran ke folder 'public/payments'
        $paymentProofPath = $request->file('payment_proof')->store('payments', 'public');

        // Menyimpan data transaksi
        $transaction = new Transaction();
        $transaction->user_id = Auth::id();  // Ambil ID pengguna yang sedang login
        $transaction->payment_amount = $request->payment_amount;
        $transaction->payment_method = $request->payment_method;
        $transaction->payment_proof = basename($paymentProofPath);  // Hanya menyimpan nama file

        // Simpan transaksi ke database
        if ($transaction->save()) {
            return redirect()->route('transaction.show', ['id' => $transaction->id])
                             ->with('success', 'Transaksi berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan transaksi.');
        }
    } catch (\Exception $e) {
        // Jika terjadi kesalahan saat menyimpan file atau transaksi
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

public function showTransaction($id)
{
    $transaction = Transaction::find($id);
    return view('transaction', compact('transaction'));
}


}

