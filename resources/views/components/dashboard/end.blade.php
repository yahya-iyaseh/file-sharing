</main>
@notifyJs
<script src="{{ asset('dash/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/plugins/chartjs.min.js') }}"></script>

<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
{{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('dash/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>

<script>
  function clickOnMe() {
    let image = document.getElementById('clickDiv')
    // let random = Math.floor(Math.random() * 2) + 1
    // console.log(random)

    // if (random == 1) {
    image.classList.remove('d-none')
    setInterval(function() {
      image.classList.add('d-none')
    }, 3350)
  }
  //   }
</script>
<script src="sweetalert2.all.min.js"></script>
<!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<script>
  $(document).ready(function() {
    $('#description').summernote();
  });
</script>

</body>

</html>
