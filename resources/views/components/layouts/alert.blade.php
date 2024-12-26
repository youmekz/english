<nav class="alert">
  {{ $slot }}
</nav>

<script>
  const alert = document.querySelector('.alert');

  alert.addEventListener('click', function() {
    alert.remove();
  })

  setTimeout(() => {
    alert.remove();
  }, 5000);
</script>