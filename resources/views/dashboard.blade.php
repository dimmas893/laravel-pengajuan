@extends('layouts.admin.template_admin')
@section('content')
      <!-- Earnings (Monthly) Card Example -->
      @php 
        $all = \App\Models\Pengajuan::count();
        $barang = \App\Models\Barang::count();

        $level_1_approve = \App\Models\Pengajuan::where('level_1', '!=', null)->count();
        $level_1_belum_approve = \App\Models\Pengajuan::where('level_1', null)->count();
        
        $level_2_approve = \App\Models\Pengajuan::where('level_1', '!=', null)->where('level_2', '!=', null)->count();
        $level_2_belum_approve = \App\Models\Pengajuan::where('level_1', '!=', null)->where('level_2', null)->count();
        
        $level_3_approve = \App\Models\Pengajuan::where('level_1', '!=', null)->where('level_2', '!=', null)->where('level_3', '!=', null)->count();
        $level_3_belum_approve = \App\Models\Pengajuan::where('level_1', '!=', null)->where('level_2', '!=', null)->where('level_3', null)->count();


        
        $user_approve = \App\Models\Pengajuan::where('user_id_pengajuan', \Illuminate\Support\Facades\Auth::user()->id)->where('level_1', '!=', null)->where('level_2', '!=', null)->where('level_3', '!=', null)->count();
        $user_belum_approve = \App\Models\Pengajuan::where('user_id_pengajuan', \Illuminate\Support\Facades\Auth::user()->id)->where('level_3', null)->count();

        $user = \App\Models\User::where('id', Auth::User()->id)->where('role', null)->first(); 
        $level_1 = \App\Models\User::where('id', Auth::User()->id)->where('role', 'level_1')->first(); 
        $level_2 = \App\Models\User::where('id', Auth::User()->id)->where('role', 'level_2')->first(); 
        $level_3 = \App\Models\User::where('id', Auth::User()->id)->where('role', 'level_3')->first(); 
      @endphp


    @if($level_1)
            <div class="row">
         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Pengajuan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $all }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-folder-open"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Approve</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $level_1_approve }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Menunggu Approve</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $level_1_belum_approve }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-pause"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Barang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $barang }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-folder"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    
    @endif
        @if($level_2)
            <div class="row">
         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Pengajuan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $all }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-folder-open"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Approve</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $level_2_approve }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Menunggu Approve</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $level_2_belum_approve }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-pause"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Barang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $barang }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-folder"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    @endif
        @if($level_3)
            <div class="row">
         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Pengajuan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $all }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-folder-open"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Approve</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $level_3_approve }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Menunggu Approve</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $level_3_belum_approve }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-pause"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Barang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $barang }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-folder"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    @endif


    @if($user)
            <div class="row">

                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Approve</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user_approve }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Menunggu Approve</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user_belum_approve }}</div>
                                        </div>
                                        <div class="col-auto">  
                                            <i class="fa-solid fa-pause"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
    @endif


    @section('script')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    @endsection
@endsection