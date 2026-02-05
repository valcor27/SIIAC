import { gsap } from 'gsap';

document.addEventListener('DOMContentLoaded', () => {
    gsap.from(".hero-content > *", {
        duration: 1,
        x: -50,
        opacity: 0,
        stagger: 0.2,
        ease: "back.out(1.7)"
    }); 
    const canvas = document.getElementById('particleCanvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let particles = [];
    let mouse = { x: null, y: null, radius: 150 };
    const dpr = window.devicePixelRatio || 1; // Factor para nitidez

    const COLORS = {
        primary: '#830734', // $principal
        accent: '#B94558',  // $color-adicional-6
    };
    
    const PARTICLE_COUNT = 150; 
    const CONNECTION_DISTANCE = 120;

    class Particle {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.baseX = x;
            this.baseY = y;
            this.size = (Math.random() * 2 + 1);
            this.density = (Math.random() * 20) + 2;
            this.offset = Math.random() * Math.PI * 2;
            this.color = COLORS.primary;
        }

        draw() {
            ctx.fillStyle = this.color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }

        update(time) {
            let wave = Math.sin(time + this.baseX * 0.01) * 8;
            let targetY = this.baseY + wave;

            if (mouse.x !== null) {
                let dx = mouse.x - this.x;
                let dy = (mouse.y - canvas.getBoundingClientRect().top) - this.y;
                let distance = Math.sqrt(dx * dx + dy * dy);
                
                if (distance < mouse.radius) {
                    let force = (mouse.radius - distance) / mouse.radius;
                    this.x -= (dx / distance) * force * this.density * 0.6;
                    this.y -= (dy / distance) * force * this.density * 0.6;
                    this.color = COLORS.accent;
                } else {
                    this.x += (this.baseX - this.x) * 0.08;
                    this.y += (targetY - this.y) * 0.08;
                    this.color = COLORS.primary;
                }
            } else {
                this.y += (targetY - this.y) * 0.05;
                this.x += (this.baseX - this.x) * 0.05;
            }
            this.size = (Math.abs(Math.sin(time + this.offset)) * 1.5) + 1;
        }
    }

    function connect() {
        for (let a = 0; a < particles.length; a++) {
            for (let b = a; b < particles.length; b++) {
                let dx = particles[a].x - particles[b].x;
                let dy = particles[a].y - particles[b].y;
                let distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < CONNECTION_DISTANCE) {
                    let opacity = 1 - (distance / CONNECTION_DISTANCE);
                    ctx.strokeStyle = `rgba(131, 7, 52, ${opacity * 0.2})`;
                    ctx.lineWidth = 1;
                    ctx.beginPath();
                    ctx.moveTo(particles[a].x, particles[a].y);
                    ctx.lineTo(particles[b].x, particles[b].y);
                    ctx.stroke();
                }
            }
        }
    }

    function init() {
        const parent = canvas.parentElement;
        const width = parent.offsetWidth;
        const height = parent.offsetHeight;

        // Ajuste para nitidez (Resolución real vs CSS)
        canvas.width = width * dpr;
        canvas.height = height * dpr;
        canvas.style.width = `${width}px`;
        canvas.style.height = `${height}px`;
        ctx.scale(dpr, dpr);
        
        particles = [];
        for (let i = 0; i < PARTICLE_COUNT; i++) {
            particles.push(new Particle(Math.random() * width, Math.random() * height));
        }
    }

    gsap.ticker.add(() => {
        ctx.clearRect(0, 0, canvas.width / dpr, canvas.height / dpr);
        const time = Date.now() * 0.0008;
        connect();
        particles.forEach(p => { p.update(time); p.draw(); });
    });

    window.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });

    window.addEventListener('resize', init);
    init();
});