<footer class="sticky-footer">
    <div class="container">
      <div class="text-center">
        <small>Copyright © Apnadental 2023</small>
      </div>
    </div>
  </footer>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
   <!-- <script src="{{ asset('public/assets/vendor/jquery/jquery.min.js') }}"></script> -->
  <!-- <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('public/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('public/assets/vendor/chart.js/Chart.js') }}"></script>
  <!-- <script src="{{ asset('public/assets/vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/datatables/dataTables.bootstrap4.js') }}"></script> -->
  <script src="{{ asset('public/assets/vendor/jquery.selectbox-0.2.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/retina-replace.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/jquery.magnific-popup.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('public/assets/js/admin.jsg') }}"></script>
  <!-- Custom scripts for this page-->
  <script src="{{ asset('public/assets/js/admin-charts.js') }}"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
  <script>
    ClassicEditor.create(document.querySelector('#description')).catch(error => {
		  console.error( error );
	  });
  </script>