<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function clubbassura()
    {
        return view('pages.club-bassura');
    }
    public function clubbssc()
    {
        return view('pages.club-bassura-sc');
    }

    public function clubblokm()
    {
        return view('pages.club-blokm');
    }
    public function clubblokmsc()
    {
        return view('pages.club-blokm-sc');
    }

    public function clubcempaka()
    {
        return view('pages.club-cempaka');
    }
    public function clubcpsc()
    {
        return view('pages.club-cp-sc');
    }

    public function clubmds()
    {
        return view('pages.club-mds');
    }
    public function clubmdssc()
    {
        return view('pages.club-mds-sc');
    }

    public function clubmbh()
    {
        return view('pages.club-mbh');
    }
    public function clubmbhsc()
    {
        return view('pages.club-mbh-sc');
    }

    public function clubobp()
    {
        return view('pages.club-obp');
    }
    public function clubobpsc()
    {
        return view('pages.club-obp-sc');
    }

    public function clubsc()
    {
        return view('pages.club-sc');
    }
    public function clubscsc()
    {
        return view('pages.club-sc-sc');
    }

    public function clubpb()
    {
        return view('pages.club-pb');
    }
    public function clubpbsc()
    {
        return view('pages.club-pb-sc');
    }
}
