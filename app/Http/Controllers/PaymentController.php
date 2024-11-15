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
    
        // Debugging: Periksa apakah transaksi ada
        dd($user->transactions);  // Akan menampilkan semua transaksi yang terkait dengan pengguna
    
        // Ambil transaksi terbaru
        $transaction = $user->transactions()->latest()->first();
    
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
        $user = Auth::user();  // Menggunakan facade Auth jika auth()->user() bermasalah
        if (!$user) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }
    
        // Validasi data yang diupload
        $request->validate([
            'payment_proof' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'payment_amount' => 'required|numeric',
            'payment_method' => 'required|string',
        ]);
    
        // Simpan file bukti pembayaran ke folder 'public/payments'
        $paymentProofPath = $request->file('payment_proof')->store('payments', 'public');
    
        // Menyimpan data transaksi
        $transaction = new Transaction();
        $transaction->user_id = $user->id;  // Ambil ID pengguna yang sedang login
        $transaction->payment_amount = $request->payment_amount;
        $transaction->payment_method = $request->payment_method;
        $transaction->payment_proof = basename($paymentProofPath);
    
        if ($transaction->save()) {
            return redirect()->route('transaction.show', ['id' => $transaction->id]);
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan transaksi.');
        }
    }
    public function showTransaction($id)
    {
        // Temukan transaksi berdasarkan ID
        $transaction = Transaction::find($id);

        // Pastikan transaksi ditemukan
        if (!$transaction) {
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }

        // Kirim data transaksi ke view untuk ditampilkan
        return view('transaction', compact('transaction'));
    }



}

