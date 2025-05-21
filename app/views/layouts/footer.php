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

    function toggleAllSchemas(expand = true) {
        document.querySelectorAll('.schema-group details').forEach(detail => {
            detail.open = expand;
        });
    }

    // Smoothly switch to the guide panel when Try Out is clicked
    // document.querySelector('.pldq-try').addEventListener('click', () => {
    //     const defaultPanel = document.getElementById("defaultRightPanel");
    //     const guidePanel = document.getElementById("guideRightPanel");

    //     defaultPanel.style.transition = 'opacity 0.3s ease';
    //     guidePanel.style.transition = 'opacity 0.3s ease';

    //     defaultPanel.style.opacity = 1;
    //     guidePanel.style.opacity = 0;
    //     guidePanel.style.display = "flex";

    //     setTimeout(() => {
    //         defaultPanel.style.opacity = 0;
    //         setTimeout(() => {
    //             defaultPanel.style.display = "none";
    //             guidePanel.style.opacity = 1;
    //         }, 300);
    //     }, 10); // tiny delay so display: flex kicks in before fade
    // });

    document.querySelectorAll('.pldq-try').forEach(button => {
        button.addEventListener('click', () => {
            const defaultPanel = document.getElementById("defaultRightPanel");

            // Hide all other guide panels first
            document.querySelectorAll('.guide-right-panel').forEach(panel => {
                panel.style.display = "none";
                panel.style.opacity = 0;
            });

            // Get the specific target panel for this button
            const targetPanelId = button.getAttribute('data-target');
            const guidePanel = document.getElementById(targetPanelId);

            // Transition logic
            defaultPanel.style.transition = 'opacity 0.3s ease';
            guidePanel.style.transition = 'opacity 0.3s ease';

            defaultPanel.style.opacity = 1;
            guidePanel.style.display = "flex";
            guidePanel.style.opacity = 0;

            setTimeout(() => {
                defaultPanel.style.opacity = 0;
                setTimeout(() => {
                    defaultPanel.style.display = "none";
                    guidePanel.style.opacity = 1;
                }, 300);
            }, 10);
        });
    });

    // Smoothly switch back when close button is clicked
    // document.getElementById("closeGuidePanel").addEventListener("click", () => {
    //     const defaultPanel = document.getElementById("defaultRightPanel");
    //     const guidePanel = document.getElementById("guideRightPanel");

    //     guidePanel.style.transition = 'opacity 0.3s ease';
    //     defaultPanel.style.transition = 'opacity 0.3s ease';

    //     guidePanel.style.opacity = 1;
    //     defaultPanel.style.opacity = 0;
    //     defaultPanel.style.display = "flex";

    //     setTimeout(() => {
    //         guidePanel.style.opacity = 0;
    //         setTimeout(() => {
    //             guidePanel.style.display = "none";
    //             defaultPanel.style.opacity = 1;
    //         }, 300);
    //     }, 10);
    // });

    document.querySelectorAll('.closeBtn').forEach(btn => {
        btn.addEventListener('click', () => {
            const guidePanel = btn.closest('.guide-right-panel');
            const defaultPanel = document.getElementById("defaultRightPanel");

            guidePanel.style.transition = 'opacity 0.3s ease';
            defaultPanel.style.transition = 'opacity 0.3s ease';

            guidePanel.style.opacity = 1;
            defaultPanel.style.display = "flex";

            setTimeout(() => {
                guidePanel.style.opacity = 0;
                setTimeout(() => {
                    guidePanel.style.display = "none";
                    defaultPanel.style.opacity = 1;
                }, 300);
            }, 10);
        });
    });

    // Close the guide panel when clicking outside of it
    // document.addEventListener("click", function(event) {
    //     const guidePanel = document.getElementById("guideRightPanel");
    //     const defaultPanel = document.getElementById("defaultRightPanel");
    //     const isClickInside = guidePanel.contains(event.target);
    //     const isTryOutButton = event.target.closest('.pldq-try');

    //     // Only trigger if the guide panel is visible AND the click was outside it
    //     if (guidePanel.style.display === "flex" && !isClickInside && !isTryOutButton) {
    //         guidePanel.style.transition = 'opacity 0.3s ease';
    //         defaultPanel.style.transition = 'opacity 0.3s ease';

    //         guidePanel.style.opacity = 1;
    //         defaultPanel.style.opacity = 0;
    //         defaultPanel.style.display = "flex";

    //         setTimeout(() => {
    //             guidePanel.style.opacity = 0;
    //             setTimeout(() => {
    //                 guidePanel.style.display = "none";
    //                 defaultPanel.style.opacity = 1;
    //             }, 300);
    //         }, 10);
    //     }
    // });

    document.addEventListener("click", function(event) {
        const isTryOutButton = event.target.closest('.pldq-try');
        const isInsidePanel = event.target.closest('.guide-right-panel');

        // Only do something if it's not from inside a panel or a try-out button
        if (!isTryOutButton && !isInsidePanel) {
            const defaultPanel = document.getElementById("defaultRightPanel");
            const openPanel = document.querySelector('.guide-right-panel[style*="display: flex"]');
            if (openPanel) {
                openPanel.style.transition = 'opacity 0.3s ease';
                defaultPanel.style.transition = 'opacity 0.3s ease';

                openPanel.style.opacity = 1;
                defaultPanel.style.display = "flex";

                setTimeout(() => {
                    openPanel.style.opacity = 0;
                    setTimeout(() => {
                        openPanel.style.display = "none";
                        defaultPanel.style.opacity = 1;
                    }, 300);
                }, 10);
            }
        }
    });

    function copyToClipboard(selector) {
        const codeEl = document.querySelector(selector);
        if (!codeEl) return alert('Code block not found!');

        const tempElement = document.createElement("textarea");
        tempElement.style.position = "absolute";
        tempElement.style.left = "-9999px";
        tempElement.value = codeEl.innerText; // gets full clean text, ignoring <span>

        document.body.appendChild(tempElement);
        tempElement.select();

        try {
            document.execCommand("copy");
            alert("Copied to clipboard!");
        } catch (err) {
            console.error("Copy failed:", err);
            alert("Copy failed!");
        }

        document.body.removeChild(tempElement);
    }
</script>


</body>
<a href="/PFD/home" class="back-to-home">Back to Home</a>

</html>