<style>
  
   a{
       font-weight: 700;
       border-bottom: 1px solid grey;
   }




body {
    margin: 0%;
    padding: 0%;
    font-family: "Lato", sans-serif;
    background-color: rgb(221, 220, 220);
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    width: 100%;
  }
  
  .sidebar {
    margin: 0;
    padding: 0;
    width: 200px;
    /* background-color: #f1f1f1; */
      background-color:black;
    position: fixed;
    height: 100%;
    overflow: auto;
    top: 0%;
  }
  
  .sidebar a {
    display: block;
    color:white;
    padding: 16px;
    text-decoration: none;
  }
   
  .sidebar a.active {
    background-color: #4CAF50;
    color: white;
  }
  
  .sidebar a:hover:not(.active) {
    background-color: rgb(167, 167, 167);
    color: white;
  }
  
  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }
  div.content .name{
      font-size: 36px;
      font-weight: 700;
      color: rgb(29, 29, 43);
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }

</style>


<div class="sidebar">
   @if (Request::is('admin*'))
       <a class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"
       href="{{ route('admin.dashboard') }}">
       Dashboard
       </a>

       <a class="{{ Request::is('admin/MinistrySectors*') ? 'active' : '' }}"
               href="{{ route('admin.MinistrySectors.index')}}">

              All Sectors
       </a>

       <a class="{{ Request::is('admin/Ministers*') ? 'active' : '' }}"
               href="{{ route('admin.Ministers.index')}}">
              All Ministers     
             </a>


       <a onclick="logout()"  style="color:white;">
       Sign Out
       </a>

       <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
       @csrf
       </form>        
   @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
      <script type="text/javascript">
      function logout(){
          const swalWithBootstrapButtons = Swal.mixin({
               customClass: {
               confirmButton: 'btn btn-success m-2',
               cancelButton: 'btn btn-danger m-2'
               },
               buttonsStyling: false
           })
           swalWithBootstrapButtons.fire({
               title: 'Are you sure to logout?',
               type: 'warning',
               showCancelButton: true,
               confirmButtonText: 'Yes',
               cancelButtonText: 'No',
               reverseButtons: true
           }).then((result) => {
               if (result.value) {
                   event.preventDefault();
                   document.getElementById('logout').submit();
               } else if (
               /* Read more about handling dismissals below */
               result.dismiss === Swal.DismissReason.cancel
               ) {
               swalWithBootstrapButtons.fire(
                   'Cancelled',
               )
              }
           })
      } 
      </script>