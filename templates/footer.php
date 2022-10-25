<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript">
  let currentPage = location.href;
  let links = document.querySelectorAll('.nav-link');
  for (let i = 0; i < links.length; i++) {
    if (links[i].href === currentPage) {
      links[i].classList.add("active");
    }
  }
</script>
</body>

</html>