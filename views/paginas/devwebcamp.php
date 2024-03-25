<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebcamp">
            </picture>
        </div>

        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p class="devwebcamp__texto">
                Sumérgete en conferencias magistrales impartidas por líderes de la industria, participa en talleres prácticos y aprovecha las oportunidades de networking para expandir tu red profesional.
            </p>
            <p class="devwebcamp__texto">
                Descubre las últimas innovaciones en desarrollo web, diseño de experiencia de usuario, inteligencia artificial, realidad aumentada y mucho más. Únete a la comunidad tecnológica y eleva tu carrera al siguiente nivel.
            </p>
        </div>
    </div>
</main>