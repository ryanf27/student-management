<?php

namespace App\Http\Controllers;

use App\Models\Payment;
// use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class ReportController extends Controller
{
    public function report($id)
    {
        $payment = Payment::find($id);
        if (!$payment) {
            abort(404, "Payment not found.");
        }

        $html = view('invoice', [
            'id' => $id,
            'payment' => $payment,
        ])->render();

        $pdf = Pdf::loadHTML($html);

        return $pdf->stream();
    }
}
