@extends('layouts.adminlte_home')
@section('content')


<style>
    .modal-header, h4, .close {
        background-color: #ff1e56;
        color:white !important;
        text-align: center;
        font-size: 20px;
    }
    .modal-footer {
        background-color: #f9f9f9;
    }
    .container-fluid-boxs{

    }
    .card{
        
        margin-left: 20px;
        margin-right: 20px;
    }
    .content-header{
        margin-left: 20px;
        margin-right: 20px;
    }
  </style>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-1">
        <div class="col-sm-6">
          <h5 class="m-0 text-dark">ข้อมูลวัสดุ</h5>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">ข้อมูลวัสดุ</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <section class="col-md-12">
        <div class="card shadow lg">
            <div class="card-header shadow lg ">
                {{-- <h6 class="float-sm-left  font-weight-bold text-danger">รายชื่อเจ้าหน้าที่</h6> --}}
                 <div align="right">

                    <form  method="post" action="{{ route('hrdperson_excel_save')}}" enctype="multipart/form-data"  class="needs-validation" novalidate>
                        @csrf
                      
                        <a href="" class=" btn btn-sm btn-info shadow-lg" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-excel text-white-90" style="font-size:15px "></i>&nbsp;&nbsp; ข้อมูลวัสดุ Excel</a>&nbsp;&nbsp;
                        <a href="" class=" btn btn-sm btn-success shadow-lg" data-toggle="modal" data-target="#assetgroupModal"><i class="fas fa-file-excel text-white-90" style="font-size:15px "></i>&nbsp;&nbsp; นำเข้าครุภัณฑ์ (หมวด) Excel</a>&nbsp;&nbsp;
                        <a href="" class=" btn btn-sm btn-success shadow-lg" data-toggle="modal" data-target="#assetModal">&nbsp;<i class="fas fa-download text-white-90" style="font-size:15px "></i>&nbsp;&nbsp;&nbsp; นำเข้าครุภัณฑ์ (รายการ/ตัว) Excel</a>&nbsp;&nbsp;                   
                    </form>
                    </div>
            </div>
                            <div class="card-body shadow lg">
                                <table class="table table-hover" id="example1" width="100%" >
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ลำดับ</th>                           
                                            <th style="text-align: center;">รหัส</th> 
                                            <th style="text-align: center;">เลขพัสดุ</th>  
                                            <th style="text-align: center;">พัสดุครุภัณฑ์</th>  
                                            <th style="text-align: center;">รายการพัสดุ</th> 
                                            <th style="text-align: center;">หมวดพัสดุ</th> 
                                            {{-- <th style="text-align: center;">คุณลักษณะ</th>  --}}
                                            <th style="text-align: center;">หน่วย</th>   
                                            {{-- <th style="text-align: center;">จำนวนที่มาก</th>  
                                            <th style="text-align: center;">จำนวนที่ต่ำ</th>   --}}
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <?php $number = 0; ?>
                                        @foreach ($sups as $sup)         
                                            <?php $number++;  ?>
                                            <tr>
                                                <td>{{ $number}}</td>
                                                <td>{{ $sup->SUP_FSN_NUM}}</td>
                                                <td>{{ $sup->TPU_NUMBER}}</td>
                                                <td>{{ $sup->SUP_NAME}} </td>
                                                <td>{{ $sup->SUP_TYPE_NAME}}</td>
                                                <td>{{ $sup->SUP_TYPE_SUP_NAME}}</td>
                                                {{-- <td>{{ $sup->SUP_PROP}}</td> --}}
                                                <td>{{ $sup->SUP_UNIT_NAME}}</td>
                                                {{-- <td>{{ $sup->MAX}}</td>
                                                <td>{{ $sup->MIN}}</td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                            </div>
                        </div>
    
        </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        <form action="{{ route('supplies_excel')}}" method="POST" enctype="multipart/form-data">           
            @csrf
    
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel ข้อมูลวัสดุ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <input type="file" name="SUPPLIES_EXCEL" id="SUPPLIES_EXCEL" class="form-control input-sm" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="invalid-feedback">กรุณาเลือกไฟล์ Excel</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-power-off fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Close&nbsp;&nbsp;</button>
                    <button type="submit" class="btn btn-info"><i class="fas fa-upload fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Import&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="modal fade" id="assetgroupModal" tabindex="-1" role="dialog" aria-labelledby="assetgroupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        <form action="{{ route('supplies_excel')}}" method="POST" enctype="multipart/form-data">           
            @csrf
    
                <div class="modal-header">
                    <h5 class="modal-title" id="assetgroupModalLabel">Import Excel นำเข้าครุภัณฑ์ (หมวด)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <input type="file" name="SUPPLIES_EXCEL" id="SUPPLIES_EXCEL" class="form-control input-sm" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="invalid-feedback">กรุณาเลือกไฟล์ Excel</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-power-off fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Close&nbsp;&nbsp;</button>
                    <button type="submit" class="btn btn-info"><i class="fas fa-upload fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Import&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="modal fade" id="assetModal" tabindex="-1" role="dialog" aria-labelledby="assetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        <form action="{{ route('asset_excel')}}" method="POST" enctype="multipart/form-data">           
            @csrf
    
                <div class="modal-header">
                    <h5 class="modal-title" id="assetModalLabel">Import Excel นำเข้าครุภัณฑ์ (รายการ/ตัว)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <input type="file" name="ASSET_EXCEL" id="ASSET_EXCEL" class="form-control input-sm" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="invalid-feedback">กรุณาเลือกไฟล์ Excel</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-power-off fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Close&nbsp;&nbsp;</button>
                    <button type="submit" class="btn btn-info"><i class="fas fa-upload fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Import&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection
