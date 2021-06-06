
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Seguro Quiere Cerrar Sesion?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione Logout para cerrar la sesion actual</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="../php/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json"></script>  
    <script>
        $(document).ready(function() {
            $('#tablaUsuarios').DataTable();
        });
    </script>
    
    <script>
        $(document).ready(function() {
            
            $('.deletebtn').on('click',function() {

                $('#deletemodal').modal('show');

                $tr=$(this.closest('tr'));

                var data= $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                
                $('#ccdelete').val(data[0]);
              

            })
        });
  
    </script>

<script>
        $(document).ready(function() {
            
            $('.deletebtn2').on('click',function() {

                $('#deletemodal2').modal('show');

                $tr=$(this.closest('tr'));

                var data= $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                
                $('#iddelete').val(data[0]);
              

            })
        });
  
    </script>

<script>
        $(document).ready(function() {
            
            $('.editbtn2').on('click',function() {

                $('#editmodal2').modal('show');

                $tr=$(this.closest('tr'));

                var data= $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#idedit').val(data[0]);
                $('#nombre').val(data[2]);
                $('#email').val(data[3]);
                $('#pass1').val(data[4]);
                $('#pass2').val(data[4]);
               


            })
        });
  
    </script>

    
    <script>
        $(document).ready(function() {
            
            $('.editbtn').on('click',function() {

                $('#editmodal').modal('show');

                $tr=$(this.closest('tr'));

                var data= $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                
                $('#ccedit').val(data[0]);
                $('#nombreedit').val(data[1]);
                $('#apellidosedit').val(data[2]);
                $('#fechaedit').val(data[3]);
                $('#teledit').val(data[4]);
                $('#diredit').val(data[5]);
                $('#edadedit').val(data[6]);


            })
        });
  
    </script>

</body>

</html>