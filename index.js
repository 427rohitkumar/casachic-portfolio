  // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });

        // Accordion Functionality
        const accordionButtons = document.querySelectorAll('.accordion-btn');

        accordionButtons.forEach(button => {
            button.addEventListener('click', () => {
                const accordionContent = button.nextElementSibling;
                const icon = button.querySelector('i');

                accordionContent.classList.toggle('open');

                if (accordionContent.classList.contains('open')) {
                    icon.classList.replace('fa-plus', 'fa-minus');
                } else {
                    icon.classList.replace('fa-minus', 'fa-plus');
                }
            });
        });
        
        
        
        
       document.addEventListener("DOMContentLoaded", function() {
  const params = new URLSearchParams(window.location.search);
  if (params.get("status") === "success") {
    alert("✅ Thank you! Your request has been submitted.");
  } else if (params.get("status") === "error") {
    alert("❌ Sorry, there was a problem. Please try again.");
  }
});

        
        

        // Tab Functionality
        const tabs = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.dataset.tab;

                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));

                tab.classList.add('active');
                document.getElementById(target).classList.add('active');
            });
        });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        
 // Show popup on page load ONLY if no status param
window.addEventListener('DOMContentLoaded', () => {
  const params = new URLSearchParams(window.location.search);
  const modal = document.getElementById('consultationModal');

  if (!params.has("status")) {
    // Only show if no form submission happened
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden'); // Disable background scroll
  }
});

  function closeModal() {
    const modal = document.getElementById('consultationModal');
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden'); // Enable scroll
  }

