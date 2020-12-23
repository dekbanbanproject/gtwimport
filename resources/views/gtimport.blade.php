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
          <h5 class="m-0 text-dark">รายชื่อเจ้าหน้าที่</h5>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">รายชื่อเจ้าหน้าที่</li>
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
                        @foreach ($persons as $person)   
                            <input type="hidden" name="id[]" id="id" value="{{$person->ID}}">
                            <input type="hidden" name="hr_fname[]" id="hr_fname" value="{{$person->HR_FNAME}}">
                            <input type="hidden" name="hr_lname[]" id="hr_lname" value="{{ $person->HR_LNAME }}">
                            <input type="hidden" name="hr_email[]" id="hr_email" value="{{ $person->HR_EMAIL }}">              
                        @endforeach
                        <a href="" class=" btn btn-sm btn-success shadow-lg" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-excel text-white-90" style="font-size:15px "></i>&nbsp;&nbsp; นำเข้าด้วย person Excel</a>&nbsp;&nbsp;
                        <button class=" btn btn-sm btn-success shadow-lg" type="submit">&nbsp;<i class="fas fa-download text-white-90" style="font-size:15px "></i>&nbsp;&nbsp;&nbsp; นำเข้า Users</button>&nbsp;&nbsp;   
                        <a href="" class=" btn btn-sm btn-success shadow-lg" data-toggle="modal" data-target="#leaveoverModal"><i class="fas fa-file-excel text-white-90" style="font-size:15px "></i>&nbsp;&nbsp; นำเข้า วันลาพักผ่อนด้วย Excel</a>&nbsp;&nbsp;                
                    </form>
                    </div>
            </div>
                            <div class="card-body shadow lg">
                                <table class="table table-hover" id="example1" width="100%" >
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ลำดับ</th>                           
                                            <th style="text-align: center;">cid</th> 
                                            <th style="text-align: center;">ชื่อ-นามสกุล</th>  
                                            <th style="text-align: center;">เพศ</th>  
                                            <th style="text-align: center;">อีเมล์</th> 
                                            <th style="text-align: center;">ตำแหน่ง</th> 
                                            <th style="text-align: center;">หน่วยงาน</th> 
                                            <th style="text-align: center;">ฝ่าย/แผนก</th>   
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <?php $number = 0; ?>
                                        @foreach ($persons as $person)         
                                            <?php $number++;  ?>
                                            <tr>
                                                <td>{{ $number}}</td>
                                                <td>{{ $person->HR_CID}}</td>
                                                <td>{{ $person->HR_FNAME}}  {{ $person->HR_LNAME}}</td>
                                                <td>{{ $person->SEX_NAME}}</td>
                                                <td>{{ $person->HR_EMAIL}}</td>
                                                <td>{{ $person->POSITION_IN_WORK}}</td>
                                                <td>{{ $person->HR_DEPARTMENT_SUB_SUB_NAME}}</td>
                                                <td>{{ $person->HR_DEPARTMENT_SUB_NAME}}</td>
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
        <form action="{{ route('hrdperson_excel')}}" method="POST" enctype="multipart/form-data">           
            @csrf
    
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel Person</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <input type="file" name="HRD_PERSON_EXCEL" id="HRD_PERSON_EXCEL" class="form-control input-sm" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="invalid-feedback">กรุณาเลือกไฟล์ Excel</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-power-off fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Close&nbsp;&nbsp;</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Import&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="modal fade" id="leaveoverModal" tabindex="-1" role="dialog" aria-labelledby="leaveoverModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
        <form action="{{ route('leaveover_excel')}}" method="POST" enctype="multipart/form-data">           
            @csrf
    
                <div class="modal-header">
                    <h5 class="modal-title" id="leaveoverModalLabel">Import วันลาพักผ่อน Excel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <input type="file" name="GLEAVEOVER_EXCEL" id="GLEAVEOVER_EXCEL" class="form-control input-sm" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="invalid-feedback">กรุณาเลือกไฟล์ Excel</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-power-off fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Close&nbsp;&nbsp;</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload fa-sm text-white-80" style="font-size:15px "></i>&nbsp;&nbsp;Import&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
        </div>
    </div>


@endsection
