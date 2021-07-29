<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap cnd -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/datatables.min.css"/>
 

    <title>CRUD PHP MYSQL AJAX</title>
  </head>
  <body>
   <h1 class="text-center">CRUD</h1>
   <div class="container-fluid">
     <div class="row">
       <div class="container">
         <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
             <table id="datatable" class="table">
               <thead>
                 <th>ID</th>
                 <th>Username</th>
                 <th>Email</th>
                 <th>Mobile</th>
                 <th>City</th>
                 <th>Options</th>
               </thead>
               <tbody>
                 <td>1</td>
                 <td>Petar Petrovic</td>
                 <td>petar@gmail.com</td>
                 <td>0657828555</td>
                 <td>Vienna</td>
                 <td><a href="" class="button">Edit</a> <a href="">Delete</a></td>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>

    <!-- jQuery script link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- DataTable link -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/datatables.min.js"></script>
    <!-- Bootstrap script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $('#datatable').DataTable({})
    </script>

  </body>
</html>