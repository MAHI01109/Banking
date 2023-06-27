<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    public function index()
    {
    return view('index');
    }
    public function creat(Request $req)
    {
        if ($req->input('submit')) {
            $p = $req->input('p');
            $n = $req->input('n');
            $fn = $req->input('fn');
            $e = $req->input('e');
            $ph = $req->input('ph');
            $g = $req->input('g');
            $c = $req->input('c');
            $s = $req->input('s');
            $ct = $req->input('ct');
            $am = $req->input('am');
            $ac = "LCF";
            $res = DB::select("select * from account");
            $x = sizeof($res);
            if ($x > 0) {
                $x = $x + 101;
                $ac = $ac . $x;
            } else
                $ac = "LCF101";
            DB::select("insert into account values('$ac','$p','$n','$fn','$e','$ph','$g','$c','$s','$ct','$am')");
            return view("creat", ["msg" => "Account Open Succefully with account Number $ac"]);
        } else
            return view("creat", ["msg" => ""]);

        }
    public function withdr(Request $req)
    {
        if($req->input('submit'))
        {
            $ac=$req->input('an');
            $p = $req->input('pin');
            $wa = $req->input('am');
            $res=DB::select("select * from account where acn='$ac' && pin='$p'");
            $x=sizeof($res);
            if($x>0)
            {
                $camt=$res[0]->AMOUNT;
                if($camt>=$wa)
                {
                    $camt=$camt-$wa;
                    DB::select("update account set AMOUNT='$camt' where acn='$ac'");

                    return view('withdr', ["msg" => "After witdhraw $wa Your Current balance is = $camt"]);

                }
                else
                    return view('withdr', ["msg" => "Insufficient blaance"]);

            }
            else
            return view('withdr', ["msg" => "Invalid Accout or Pin"]);

        }
        else
        return view('withdr',["msg"=>""]);
    }
    public function deposit()
    {
        return view('deposit');
    }
    public function Acc()
    {
        return view('Acc');
    }
    public function bala()
    {
        return view('bala');
    }
}
