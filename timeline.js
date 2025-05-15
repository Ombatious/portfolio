document.addEventListener('DOMContentLoaded', function() {
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    function animateTimeline() {
        timelineItems.forEach((item, index) => {
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                    observer.unobserve(item);
                }
            }, { threshold: 0.1 });
            
            observer.observe(item);
            
            // Set initial state
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = `opacity 0.5s ease ${index * 0.2}s, transform 0.5s ease ${index * 0.2}s`;
        });
    }
    
    if (timelineItems.length > 0) {
        animateTimeline();
    }
});