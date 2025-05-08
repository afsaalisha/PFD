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

    function togglePldqDropdown(header) {
        const content = header.nextElementSibling;
        const arrow = header.querySelector('.pldq-arrow');
        content.classList.toggle('open');
        arrow.style.transform = content.classList.contains('open') ? 'rotate(180deg)' : 'rotate(0deg)';
    }

    function switchTab(button, tabName) {
        const parent = button.closest('.pldq-subtitle').nextElementSibling.parentElement;
        const allTabs = parent.querySelectorAll('.pldq-tab');
        const allContents = parent.querySelectorAll('.pldq-tab-content');

        allTabs.forEach(tab => tab.classList.remove('active'));
        button.classList.add('active');

        allContents.forEach(content => {
            content.style.display = content.dataset.tab === tabName ? 'block' : 'none';
        });
    }

    function toggleSchema(el) {
        el.classList.toggle('open');
        const arrow = el.querySelector('.arrow');
        if (arrow) arrow.textContent = el.classList.contains('open') ? '▲' : '▼';
    }
</script>


</body>
<a href="/PFD/home" class="back-to-home">Back to Home</a>

</html>