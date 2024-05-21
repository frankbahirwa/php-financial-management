
        const images = document.querySelectorAll('.sub-home-content img');
        const centerX = 200; // adjust the center X position
        const centerY = 200; // adjust the center Y position
        const radius = 150; // adjust the radius

        let angle = 0;

        function animateImages() {
            angle += 0.005;

            images.forEach((img, index) => {
                const x = centerX + radius * Math.cos(angle + (index * (2 * Math.PI) / images.length));
                const y = centerY + radius * Math.sin(angle + (index * (2 * Math.PI) / images.length));

                img.style.left = x + 'px';
                img.style.top = y + 'px';
            });

            requestAnimationFrame(animateImages);
        }

        animateImages();
    