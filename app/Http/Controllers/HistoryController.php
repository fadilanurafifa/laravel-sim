<?php

namespace App\Http\Controllers;

use App\Models\catatan;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function destroy($id)
    {
        // Temukan data berdasarkan ID
        $history = catatan::findOrFail($id);

        // Hapus data
        $history->delete($id);

        // Redirect atau kembalikan response
        return redirect('history')->with('success', 'History item deleted successfully.');
    }
}
