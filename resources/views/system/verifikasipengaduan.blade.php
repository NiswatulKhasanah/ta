@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4> <i class="fas fa-clipboard-check mr-2"></i><b>Verifikasi Pengaduan Masyarakat </b></h4><hr>
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">TANGGAL</th>
                        <th scope="col" class="text-center"> NIK</th>
                        <th scope="col" class="text-center"> Isi Laporan</th>
                        <th scope="col" class="text-center">Foto</th>
                        <th scope="col" class="text-center">Status</th>
                        <th colspan="3" scope="col" class="text-center">AKSI</th> 
                  </tr>
                  </thead>
                  <tbody>

                   <tr>
                    <td scope="row">127819</td>
                    <td>18 Februari 2021</td>
                    <td>74198 </td>
                    <td>Saya </td>
                    <td> 88</td>
                    <td> Belum di proses </td>
                    <td > <a href="" class="btn btn-info"  title=""> <i class="fas fa-info-circle"></i> Detail & Verifikasi</a></td>  
                    
                    
                  </tr>


                </tbody>
                    
              </table>
    </div>  
  </div>
  @endsection