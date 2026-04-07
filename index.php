<?php
// Referral Detection
$referral = isset($_GET['ref']) ? htmlspecialchars($_GET['ref']) : null;
$youtube_video_id = "4ErNLQsitHI";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Pago Voz | Confirma tus pagos en VOZ ALTA</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Referral Welcome -->
    <?php if ($referral): ?>
    <div style="background: var(--accent); color: #000; text-align: center; padding: 10px; font-weight: 800; position: sticky; top: 0; z-index: 2000;">
        🚀 Estás invitado por: <strong><?php echo strtoupper($referral); ?></strong>
    </div>
    <?php endif; ?>

    <!-- Floating WA -->
    <a href="https://wa.me/51902027886?text=Hola,%20quiero%20m%C3%A1s%20informaci%C3%B3n%20de%20la%20aplicaci%C3%B3n%20Pago%20Voz,%20vengo%20de%20tu%20P%C3%A1gina%20web" class="floating-wa" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <div class="container">
        
        <!-- HERO -->
        <header class="hero">
            <h1>🔊 Confirma tus Yapeos en <span style="display:block; color:var(--accent)">VOZ ALTA</span></h1>
            <p>Con <strong>Pago Voz</strong>, tu celular te avisa automáticamente cada vez que recibes un pago 💸</p>
            <img src="assets/img/app-hero.png" alt="Pago Voz App" class="hero-img">
            <button onclick="buyWA()" class="btn-main">
                <i class="fab fa-whatsapp"></i> SOLICITAR APLICACIÓN
            </button>
        </header>

        <!-- HOW IT WORKS (CATEGORIZED & CENTERED) -->
        <section id="features">
            <h2 class="section-title">¿Cómo <span>funciona</span>?</h2>
            
            <div class="features-container">
                <span class="feature-label">Funciones Principales</span>
                <div class="feature-item">
                    <i class="fas fa-check-circle"></i> <span>Al recibir un yapeo, el app dice el <strong>monto y nombre</strong></span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check-circle"></i> <span>Confirmación con <strong>código de seguridad</strong></span>
                </div>

                <div class="feature-line"></div>

                <span class="feature-label">Opciones Adicionales</span>
                <div class="feature-item">
                    <i class="fas fa-plus-circle"></i> <span>Ver los <strong>ingresos diarios</strong></span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-plus-circle"></i> <span>Opción para <strong>escuchar WhatsApp</strong></span>
                </div>
            </div>
            
            <p style="color:var(--text-muted); margin-top:30px; font-weight:600; font-size:0.9rem;">
                ¡Ideal para negocios con movimiento constante! 🙌
            </p>
        </section>

        <!-- VIDEO DEMO -->
        <section id="video">
            <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 30px; border: 2px solid var(--glass-border); box-shadow: 0 15px 40px rgba(0,0,0,0.5);">
                <iframe style="position: absolute; top:0; left:0; width:100%; height:100%;" src="https://www.youtube.com/embed/<?php echo $youtube_video_id; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>

        <!-- PRICING (INTERACTIVE) -->
        <section id="pricing">
            <h2 class="section-title">Elige tu <span>Plan</span></h2>
            <div class="price-grid">
                <div class="price-card" onclick="selectPlan(this, 'Plan Mensual (S/ 9.90)')">
                    <p class="price-title">Plan Mensual</p>
                    <p class="price-val">S/ 9.90</p>
                    <p class="price-sub">Por mes</p>
                </div>
                <div class="price-card featured selected" onclick="selectPlan(this, 'Plan 6 meses (S/ 49.90 - RECOMENDADO)')">
                    <div class="badge-featured">🔥 RECOMENDADO 🔥</div>
                    <p class="price-title">6 Meses</p>
                    <p class="price-val">S/ 49.90</p>
                    <p class="price-sub">PREMIUM + ACTUALIZACIONES</p>
                </div>
                <div class="price-card" onclick="selectPlan(this, 'Plan Anual (S/ 99.90)')">
                    <p class="price-title">Plan Anual</p>
                    <p class="price-val">S/ 99.90</p>
                    <p class="price-sub">PREMIUM + ACTUALIZACIONES</p>
                </div>
            </div>
            <div style="margin-top:40px;">
                <button onclick="buyWA()" class="btn-main">
                    <i class="fab fa-whatsapp"></i> SOLICITAR APLICACIÓN
                </button>
            </div>
        </section>

    </div>

    <!-- FOOTER -->
    <footer>
        <p style="margin-bottom:15px; font-weight:600; opacity:0.8;">&copy; 2026 Pago Voz. Todos los derechos reservados 💸📲</p>
        <a href="referidos" class="footer-link">Referidos</a>
    </footer>

    <!-- Toast Notification -->
    <div id="toast"></div>

    <script src="assets/js/script.js"></script>
</body>
</html>
