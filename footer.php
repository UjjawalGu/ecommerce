<!---Footer --->
<footer class="py-3">
  <div class="container-fluid">
    <p class="text-center">© 2023. All rights reserved by 🕉 .</p>
  </div>
</footer>

  

    
    

<script src="JS/main.js"></script>
<script>
  const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
  const value = parseInt(counter.dataset.value);
  let count = 0;

  setInterval(() => {
    if (count <= value) {
      counter.innerHTML = count;
      count++;
    }
  }, 10);
});

</script>

	<!-- Bootstrap 5 JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
