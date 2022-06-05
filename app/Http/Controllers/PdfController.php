<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use pdf;
use App\Models\User;

class PdfController extends Controller
{
       
    public function imprimirusuarios(Request $request)
    {
        $usuarios=User::orderBy('id','ASC')->get();
        $pdf = \PDF::loadView('Pdf.usuariosPDF',['usuarios' => $usuarios ]);
        $pdf->setPaper('carta', 'A4');
        
        return $pdf->stream();
    }  
}