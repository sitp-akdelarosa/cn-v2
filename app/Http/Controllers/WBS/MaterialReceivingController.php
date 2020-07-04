<?php
/*******************************************************************************
Copyright (c) Seiko IT Solutions Philippines All rights reserved.

FILE NAME: MaterialReceivingController.php
MODULE NAME:  Material Receiving
CREATED BY: MESPINOSA
DATE CREATED: 2016.07.05
REVISION HISTORY :

VERSION     ROUND    DATE           PIC              DESCRIPTION
100-00-01   1     2016.07.05     MESPINOSA       Initial Draft
200-00-01   1     2016.12.20     AKDELAROSA      2ND VERSION
300-00-01   1     2020.07.03     AKDELAROSA      3RD VERSION
*******************************************************************************/

namespace App\Http\Controllers\WBS;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\AccessController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Dompdf\Dompdf;
use PDF;
use App;
use Excel;
use Config;
use DB;


class MaterialReceivingController extends Controller
{
    protected $_mysql;
    protected $_mssql;
    protected $_common;
    protected $_barcode;
    protected $_ppscon;
    protected $_access;
    protected $_helper;

    public function __construct()
    {
        $this->middleware('auth');
        $this->_access = new AccessController;
        $this->_helper = new HelperController;

        if (Auth::user() != null) {
            $this->_mysql = $this->_access->userDBcon('wbs');
            $this->_mssql = $this->_access->userDBcon('mssql');
            $this->_common = $this->_access->userDBcon('common');
            $this->_barcode = $this->_access->userDBcon('barcode');
        } else {
            return redirect('/');
        }
    }

    public function index()
    {
        if(!$this->_access->getAccessRights('3017', $userProgramAccess))
        {
            return redirect('/home');
        }
        else
        {
            $packages = $this->_helper->getDropdownById(86);
            
            return view('wbs.material-receiving.material-receiving', [
                        'userProgramAccess' => $userProgramAccess,
                        'packages' => $packages
                    ]);
        }
    }
}
