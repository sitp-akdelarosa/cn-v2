<!--
*******************************************************************************
    Copyright (c) Seiko IT Solutions Philippines All rights reserved.

    FILE NAME: home.blade.php
    MODULE NAME:  Home
    CREATED BY: AK.DELAROSA
    DATE CREATED: 2020.07.03
    REVISION HISTORY :

    VERSION     ROUND    DATE           PIC              DESCRIPTION
    100-00-01   1        2020.07.03     AK.DELAROSA      Initial Draft
*******************************************************************************
-->
@extends('layouts.app')

@section('title')
	Home | Pricon Microelectronics, Inc.
@endsection

@push('css')
<link href="{{ asset('pages/home/home.css') }}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box grey-gallery">
                <div class="portlet-title">
                    <div class="caption">
                        YPICS SUBSYSTEM
                    </div>
                </div>
                <div class="portlet-body blue">
                    <p style="color:#fff;">
                        <strong>DISCLAIMER :</strong> Information appearing on PMI YPICS Sub System intranet application are copyrighted by Pricon Microelectronics, Inc. (PMI). Permission to reprint or electronically reproduce any document or graphic in part or in its entirely for any reason other than personal use is expressly prohibited, unless prior written consent is obtained from PMI staff and the proper entities.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-comments"></i> NOTIFICATIONS
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-condensed" id="inventory" style="font-size:10px;">

                        <thead>
                            <tr>
                                <td width="20%">ITEM CODE</td>
                                <td width="60%">ITEM NAME</td>
                                <td width="20%">FOR ORDERING</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
@endsection


@push('script')
<script src="{{ asset('pages/home/home.js') }}" type="text/javascript"></script>
@endpush