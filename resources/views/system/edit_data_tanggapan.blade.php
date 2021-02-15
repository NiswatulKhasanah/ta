@extends('layout.main')

@section('content')

      <div class="col-md-10 p-5 pt-2 mt-3" > 
      
      <div class="col-md-10" style=" margin-top: 3%; margin-left:9%; width:100%; box-shadow: 0 2px 10px rgba(0,0,0,0.2); padding:2%;">
       
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" > <i class="fas fa-paste mr-2"></i><b>Edit Data Tanggapan  </b></h3> <hr>
            </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="Id Tanggapan"> Id Tanggapan</label>
          <input type="Id" name="" class="form-control" id="Id Tanggapan" > 
     </div>
    </div>
    
    
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="Id Pengaduan"> Id Pengaduan </label>
          <input type="text" name="" class="form-control" id="Id Pengaduan"> 
     </div>
   </div>
  
   
    <div class="col-md-6">
     <div class="form-group mt-3">
      <label for="TglTanggapan"> Tanggal Tanggapan </label>
      <input type="text" name="" class="form-control"  id="TglTanggapan"> 
     </div>
   </div>
    
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="Tanggapan">Tanggapan</label>
          <input type="text" name="" class="form-control" id="Tanggapan"> 
     </div>
   </div>
    
      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="Id Petugas"> Id Petugas</label>
          <input type="text" name="" class="form-control" id="Id Petugas"> 
     </div>
   </div>
    

      <div class="col-md-6">
        <div class="form-group mt-3">
          <label for="UploadImages"> Level</label>
          <input type="text" name="" class="form-control" id="UploadImages"> 
     </div>
   </div>
    
 


     </form>
   </div>



      <div class="container mt-2">
        <div class="row">
            <div class="col-md-5"></div>
              <div class="col-md-5"></div>
            <div class="col-md-2" >
            <div>
              <button type="submit" class="btn btn-primary text-white creteround font-weight-bold">SIMPAN</button>
            </div>
          </div>
      </div>
  </div>
@endsection