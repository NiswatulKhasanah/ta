@extends('layout.main')

@section('content')
      
      <div class="col-md-10 p-5 pt-2 mt-3"> 
        <h4><i class="fas fa-paste mr-2"></i><b> Data Tanggapan </b></h4><hr>
       
          <table class="table table-striped table-bordered mt-3">
                  <thead>
                  <tr>
                        <th scope="col" class="text-center">Id_Tanggapan</th>
                        <th scope="col" class="text-center">Id_Pengaduan</th>
                        <th scope="col" class="text-center">Tanggal_Tanggapan</th>
                        <th scope="col" class="text-center">Tanggapan</th>
                        <th scope="col" class="text-center">Id_petugas</th>
                        <th colspan="3" scope="col" class="text-center">AKSI</th> 
                  </tr>
                  </thead>
                  <tbody>

                   <tr>
                    <td scope="row">127819</td>
                    <td> 1839 </td>
                    <td> 18/2/21 </td>
                    <td> Terimahkasi </td>
                    <td> 888389</td>
                    <td > <a href="edit_data_tanggapan.html" class="btn btn-info" title=""> <i class="fa fa-edit mr-2"></i> EDIT</a></td>  
                     <td > <a  onclick ="return confirm ('Apakah Anda Yakin Menghapus Data Ini')"href="" class="btn btn-danger" title=""> <i class="fa fa-trash mr-2"></i>HAPUS</a></td> 
                    
                    
                  </tr>


                </tbody>
                    
              </table>
    </div>  
  </div>
@endsection