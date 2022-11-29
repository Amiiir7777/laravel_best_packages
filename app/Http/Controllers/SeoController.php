<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Amir');
        SEOMeta::setDescription('Amir');
        SEOMeta::setKeywords(['Amir', 'amiiirwp', 'text']);
        SEOTools::opengraph()->setUrl('http://amiiirwp.ir');
        return view('seo.index');
    }
}
