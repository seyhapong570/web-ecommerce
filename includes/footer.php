    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>


    <!-- Alertify JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

    <script>
        alertify.set('notifier','position', 'top-right');
        <?php 
        if(isset($_SESSION['message']))
        { 
          ?>
              alertify.success('<?= $_SESSION['message']; ?>');
          <?php
          unset($_SESSION['message']);
        }
        ?>
    </script>
  </body>
</html>

