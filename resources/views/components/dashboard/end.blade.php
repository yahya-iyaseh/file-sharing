</main>
@notifyJs

<!-- include summernote css/js -->
<script src="{{ asset('summernote/summernote-lite.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#description').summernote();
  });
</script>

<script src="{{ asset('dash/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('dash/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>

<script>
  function clickOnMe() {
    let image = document.getElementById('clickDiv')
    image.classList.remove('d-none')
    setInterval(function() {
      image.classList.add('d-none')
    }, 3350)
  }
</script>

</body>

</html>
