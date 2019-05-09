<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\arraytoboject;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class DownloadController extends Controller
{
    public function downloadppt($titel)
    {
        if($titel == "VARONIS")
        {
            $file = public_path()."/powerpoint/Varonis _ EHACK2019.pptx";

            $header = array(
                'Content-Type: application/ppt',
            );
            return response()->download($file, "Varonis_EHACK2019.pptx", $header);
            
        }
        else
        {
            return redirect('/');
        }
        
    }
}
