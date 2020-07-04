<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class AccessController extends Controller
{
    protected $mysql;
    protected $mssql;
    protected $common;
    protected $wbs;

    public function __construct()
    {
        if (Auth::user() != null) {
            $this->mysql = $this->userDBcon('mysql');
            $this->wbs = $this->userDBcon('wbs');
            $this->mssql = $this->userDBcon('mssql');
            $this->common = $this->userDBcon('common');
        } else {
            return redirect('/');
        }
    }

    public function userDBcon($dbms)
    {
        switch ($dbms) {
            case 'mysql':
                return "mysqlcn";
                break;

            case 'stocksquery':
                return "mysqlstockquerycn";
                break;

            case 'wbs':
                return "mysqlwbscn";
                break;

            case 'traffic':
                return "mysqltrafficcn";
                break;

            case 'mssql':
                return "sqlsrvcn";
                break;

            case 'common':
                return "common";
                break;
            break;

            case 'barcode':
                return "mysql_barcode_cn";
                break;
            
            case 'pps_invoice':
                return "pps_invoice";
                break;

            default:
                return "common";
                break;
            break;
        }

    }

    public function getAccessRights($module_code, &$user_program_access)
    {
        $result = true;

        try
        {
            $user_program_access = DB::connection($this->common)
                                    ->table('muserprograms as U')
                                    ->join('mprograms as P', 'P.program_code', '=', 'U.program_code')
                                    ->select('P.program_name', 'U.program_code','U.user_id','U.read_write','P.program_class')
                                    ->where('U.id_tblusers', Auth::user()->id)
                                    ->where('U.delete_flag', '0')
                                    ->orderBy('U.id','asc')
                                    ->get();

            $checkAccess = DB::connection($this->common)
                            ->table('muserprograms')
                            ->where('id_tblusers',Auth::user()->id)
                            ->where('program_code',$module_code)
                            ->count();
                            
            if ($checkAccess == 0) {
                $result = false;
            }
        }
        catch (Exception $e)
        {
            Log::error($e->getMessage());
        }

        return $result;
    }
}
