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
          <h5 class="m-0 text-dark">ข้อมูลครุภัณฑ์</h5>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">ข้อมูลครุภัณฑ์</li>
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
                        <a href="" class=" btn btn-sm btn-success shadow-lg" data-toggle="modal" data-target="#assetModal">&nbsp;<i class="fas fa-download text-white-90" style="font-size:15px "></i>&nbsp;&nbsp;&nbsp; นำเข้าครุภัณฑ์ </a>&nbsp;&nbsp;                   
                    </form>
                    </div>
            </div>
                            <div class="card-body shadow lg">
                                <table class="table table-hover" id="example1" width="100%" >
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ลำดับ</th>                           
                                            <th style="text-align: center;">รหัสครุภัณฑ์</th> 
                                            <th style="text-align: center;">ชื่อครุภัณฑ์</th>  
                                            <th style="text-align: center;">ราคา</th>  
                                            <th style="text-align: center;">รับเข้าวันที่</th> 
                                            <th style="text-align: center;">หมดอายุ</th> 
                                            <th style="text-align: center;">ปี</th>   
                                            <th style="text-align: center;">เลข FSN </th>  
                                            <th style="text-align: center;">รายละเอียด</th>  
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <?php $number = 0; ?>
                                        @foreach ($assets as $asset)         
                                            <?php $number++;  ?>
                                            <tr>
                                                <td>{{ $number}}</td>
                                                <td>{{ $asset->ARTICLE_NUM}}</td>
                                                <td>{{ $asset->ARTICLE_NAME}}</td>
                                                <td>{{ $asset->PRICE_PER_UNIT}} </td>
                                                <td>{{ $asset->RECEIVE_DATE}}</td>
                                                <td>{{ $asset->EXPIRE_DATE}}</td>
                                                <td>{{ $asset->YEAR_ID}}</td>
                                                <td>{{ $asset->SUP_FSN}}</td>
                                                <td>{{ $asset->ARTICLE_PROP}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                            </div>
                        </div>
    
        </section>

@endsection
