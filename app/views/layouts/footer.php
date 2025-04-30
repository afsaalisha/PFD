<script>
    document.querySelectorAll('.guide-collapsible').forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('active');
            const content = btn.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });
</script>


</body>
<a href="/PFD/home" class="back-to-home">Back to Home</a>
</html>
