<?php
/*******************************************************************************
Copyright (c) Seiko IT Solutions Philippines All rights reserved.

FILE NAME: HomeController.php
MODULE NAME:  Home
CREATED BY: AK.DELAROSA
DATE CREATED: 2020.07.03
REVISION HISTORY :

VERSION     ROUND    DATE           PIC              DESCRIPTION
100-00-01   1        2020.07.03     AK.DELAROSA      Initial Draft
*******************************************************************************/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    protected $_mysql;
    protected $_mssql;
    protected $_common;
    protected $_access;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->_access = new AccessController;

        if (Auth::user() != null) {
            $this->_mysql = $this->_access->userDBcon('mysql');
            $this->_mssql = $this->_access->userDBcon('mssql');
            $this->_common = $this->_access->userDBcon('common');
        } else {
            return redirect('/home');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userProgramAccess = DB::connection('common')
                                ->table('muserprograms as U')
                                ->join('mprograms as P', 'P.program_code', '=', 'U.program_code')
                                ->select('P.program_name', 'U.program_code','U.user_id','U.read_write','P.program_class')
                                ->where('U.id_tblusers', Auth::user()->id)
                                ->where('U.delete_flag', '0')
                                ->orderBy('U.id','asc')
                                ->get();
        
        return view('home', ['userProgramAccess' => $userProgramAccess]);
    }

    public function getForOrdering()
    {
        $data = [];

        $data = DB::connection('mysqlcn')
                    ->table('tbl_mrareport')
                    ->where('forordering', '>', 0)
                    ->select('ItemCode as itemcode',
                            'ItemName as itemname',
                            'ForOrdering as forordering')
                    ->get();
        
        return response()->json($data);
    }
}
