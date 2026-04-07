document.addEventListener('DOMContentLoaded', () => {
    const refInput = document.getElementById('ref-input');
    const displayLink = document.getElementById('display-link');
    const toast = document.getElementById('toast');
    
    // Default Selected Plan (6 Months)
    let selectedPlan = "Plan 6 meses (S/ 49.90 - RECOMENDADO)";
    
    // Base URL for referral links (Dynamic for Vercel)
    const baseUrl = window.location.origin + '/';

    function showToast(message) {
        if (!toast) return;
        toast.textContent = message;
        toast.style.display = 'block';
        setTimeout(() => { toast.style.display = 'none'; }, 2500);
    }

    // Plan Selection Logic (index.php)
    window.selectPlan = (element, planName) => {
        document.querySelectorAll('.price-card').forEach(card => card.classList.remove('selected'));
        element.classList.add('selected');
        selectedPlan = planName;
        showToast(`✔ Seleccionado: ${planName}`);
    };

    function updateRefLink() {
        if (!refInput) return;
        const username = refInput.value.trim().replace(/\s+/g, '-').toLowerCase();
        // If empty, show example
        const finalLink = username ? `${baseUrl}?ref=${username}` : `${baseUrl}?ref=usuario`;
        if (displayLink) displayLink.textContent = finalLink;
        return finalLink;
    }

    if (refInput) {
        refInput.addEventListener('input', updateRefLink);
        updateRefLink(); // Initialize on load
    }

    // Main Sales Page WA Redirect (902 027 886)
    window.buyWA = () => {
        const msg = encodeURIComponent(`Hola, me gustaría adquirir la aplicación Pago Voz con el plan: ${selectedPlan}. ¿Podrían brindarme más información?`);
        window.open(`https://wa.me/51902027886?text=${msg}`, '_blank');
    };

    // Referral Dashboard Tools (referidos.php)
    window.shareApp = (scriptType) => {
        let message = "";

        switch(scriptType) {
            case 'full_info':
                message = `🔊📲 ¡Escucha tus Yapeos en Voz Alta!\n\nCon Pago Yape Voz, tu celular te avisa automáticamente cada vez que recibes un pago 💸\n\n🗣️ La app dice en voz alta:\n\n✅ “Recibiste un Yapeo”\n💰 Monto recibido\n👤 Nombre de quien envió\n🔐 Código de seguridad\n\n¡Sin necesidad de estar revisando tu celular a cada rato! 🙌\nIdeal para negocios con movimiento constante.\n\n🚀 Funciones adicionales:\n\n🔵 Botón flotante en pantalla\n📊 Muestra los ingresos del día\n📁 Historial completo de pagos\n💬 Opción para escuchar mensajes de WhatsApp en voz alta\n\n🎁 Beneficios extra:\n\n🔄 Actualizaciones gratuitas\n📅 Incluidas en la membresía anual\n\n🔥 Una excelente opción para tu negocio si quieres trabajar más rápido y con mayor seguridad.`;
                break;
            case 'how_works':
                message = `🚀 Funciones de Pago Voz:\n🔵 Botón flotante en pantalla\n📊 Muestra los ingresos del día\n📁 Historial completo de pagos\n💬 Opción para escuchar mensajes de WhatsApp\n\n¡Una excelente opción para trabajar más rápido y con mayor seguridad!`;
                break;
            case 'promo':
                message = `💰 Planes y Precios\n\nElige el plan que mejor se adapte a tu negocio:\n\n🔥🔥 PLAN MÁS RECOMENDADO 🔥🔥\n💎 S/ 49.90 por 6 meses\nIdeal si quieres estabilidad y pagar menos sin comprometerte a un año completo.\n(PREMIUM + ACTUALIZACIONES)\n\n⭐ S/ 9.90 por mes\nPerfecto si deseas empezar con inversión mínima.\n\n📅 S/ 99.90 al año\n(PREMIUM + ACTUALIZACIONES).`;
                break;
            case 'video':
                message = `🎥 Mira este video de cómo funciona la aplicación Pago Voz: https://youtu.be/4ErNLQsitHI \n\n¡Inversión mínima para un mejor control de tu negocio! 💸📲`;
                break;
            case 'payments':
                message = `💳 METODOS DE PAGO: Luis Zapata Vega\n\n🔸 YAPE: 916857882\n🔸 Cuenta BCP: 191-70428191-0-84\n🔸 CCI: 002-19117042819108450\n\n😉 Hecho el pago me envías la captura para verificarlo y enviarte la aplicación Pago Voz + video de instalación.`;
                break;
        }

        if (message) {
            window.open(`https://wa.me/?text=${encodeURIComponent(message)}`, '_blank');
        }
    };

    // Generic Copier
    window.copyText = (text, type = "link") => {
        navigator.clipboard.writeText(text).then(() => {
            showToast(type === "acc" ? "✅ Cuenta copiada" : "✅ Texto copiado");
        });
    };

    // Scroll Animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = "0";
        section.style.transform = "translateY(20px)";
        section.style.transition = "all 0.6s ease-out";
        observer.observe(section);
    });
});
