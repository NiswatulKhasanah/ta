@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4><i class="fas fa-users mr-2"></i><b> Data Masyarakat </b></h4><hr>

      
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">NIK</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Username</th>
                        <th scope="col" class="text-center">Password</th>
                        <th scope="col" class="text-center">Telp</th>
                        <th colspan="3" scope="col" class="text-center">AKSI</th> 
                  </tr>
                  </thead>
                  <tbody>

                   <tr>
                    <td scope="row">127819</td>
                    <td> alex </td>
                    <td> alex_89 </td>
                    <td> petugas </td>
                    <td> 888389</td>  
                     <td > <a  onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')"href="" class="btn btn-danger" title=""> <i class="fa fa-trash mr-2 "></i>HAPUS</a></td> 
                    
                    
                  </tr>


                </tbody>
                    
              </table>
    </div>  
  </div>

  @endsection