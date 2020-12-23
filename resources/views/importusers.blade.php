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

                        <a href="{{ route('Per.welcome')}}" class=" btn btn-sm btn-info shadow-lg"><i class="fas fa-file-excel text-white-90" style="font-size:15px "></i>&nbsp;&nbsp; ย้อนกลับ</a>&nbsp;&nbsp;
                       
                    </div>
            </div>
                            <div class="card-body shadow lg">
                                <table class="table table-hover" id="example1" width="100%" >
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">ลำดับ</th>  
                                            <th style="text-align: center;">ชื่อ-นามสกุล</th>  
                                            <th style="text-align: center;">อีเมล์</th>  
                                            <th style="text-align: center;">สถานะ</th>  
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <?php $number = 0; ?>
                                        @foreach ($persons as $person)         
                                            <?php $number++;  ?>
                                            <tr>
                                                <td>{{ $number}}</td>
                                                <td>{{ $person->name}}</td>
                                                <td>{{ $person->email}}</td>
                                                <td>{{ $person->status}}</td>                                               
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                            </div>
                        </div>
    
        </section>




@endsection
