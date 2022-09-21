 <!-- JavaScript Bundle with Popper -->
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  

    <script>
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  </script>
 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.4/venobox.min.js" integrity="sha512-KX9LF4BMXOG6qr9aGjFIPK1xysZAHWXpuZW6gnRi6oM+41qa8x4zaLPkckNxz5veoSWzmV5HZqPMMtknU+431g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    new VenoBox({
    selector: ".my-video-links"
});
  </script>
 
  <script>
    $(document).ready(function () { 
  $('.nav-item').click(function () {
     // if($(".navbar-collapse").hasClass("in")){
       $('.navbar-collapse').collapse('hide');
     // }
  });
});
  </script>

</body>

</html>