@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4><i class="fas fa-file-alt mr-2"></i><b> Data Pengaduan </b></h4><hr>
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">Id_Pengaduan</th>
                        <th scope="col" class="text-center">Tanggal_Pengaduan</th>
                        <th scope="col" class="text-center">NIK</th>
                        <th scope="col" class="text-center">Isi_Laporan</th>
                        <th scope="col" class="text-center">Foto</th>
                        <th scope="col" class="text-center">Status</th>
                        
                  </tr>
                  </thead>
                  <tbody>

                   <tr>
                    <td scope="row">127819</td>
                    <td> alex </td>
                    <td> alex_89 </td>
                    <td> petugas </td>
                    <td> 888389</td>
                    <td> petugas </td>
                    
                    
                  </tr>


                </tbody>
                    
              </table>
    </div>  
  </div>
@endsection