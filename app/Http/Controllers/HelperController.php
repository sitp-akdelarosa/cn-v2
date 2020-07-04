<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HelperController extends Controller
{
    protected $_mysql;
    protected $_mssql;
    protected $_common;
    protected $_wbs;
    protected $_access;

    public function __construct()
    {
        $this->_access = new AccessController;

        if (Auth::user() != null) {
            $this->_mysql = $this->_access->userDBcon('mysql');
            $this->_mssql = $this->_access->userDBcon('mssql');
            $this->_wbs = $this->_access->userDBcon('wbs');
            $this->_common = $this->_access->userDBcon('common');
        } else {
            return redirect('/');
        }
    }

    public function getDropdownById(int $cathegory_id)
    {
        $result = [];
        
        try
        {
            $result = DB::connection($this->_mysql)
                        ->table('tbl_mdropdowns')
                        ->where('category', $cathegory_id)
                        ->get();
        }
        catch (Exception $e)
        {
            Log::error($e->getMessage());
        }

        return $result;
    }


}
