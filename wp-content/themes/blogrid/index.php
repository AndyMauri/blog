<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blogrid
 */

get_header(); ?>

<div style="margin: 0 -19%;">
    <h2 style="font-size: 40px; font-weight: bold;">Articulos destacados</h2>
    <h2 style="font-size: 26px; margin-top: -2%;">Entérate de las últimas noticias del sector</h2>
</div>

<div class="card-grid">
    <div class="card-container">
        <div class="card">
            <img src="https://th.bing.com/th/id/OIP.x4EXJJ4rCCWtFcIku7gRgQAAAA?rs=1&pid=ImgDetMain" alt="Descripción">
            <div class="card-content">
                <h2>Sostenibilidad y eficiencia energética</h2>
                <p>La sostenibilidad en el sector inmobiliario es un tema crucial en la actualidad, y su aplicación puede marcar una diferencia significativa en la protección del medio ambiente y la reducción de costos. </p>
                <a href="/blog/?page_id=74" class="btn">Leer más</a>
            </div>
        </div>
        <!-- Tarjeta 2 -->
        <!-- <div class="card">
            <img src="https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297_1280.jpg" alt="Descripción">
            <div class="card-content">
                <h2>Descubre la Belleza Natural</h2>
                <p>Explora nuestra selección de productos orgánicos y sostenibles, diseñados para realzar tu belleza de forma natural. Desde cosméticos libres de químicos hasta productos de cuidado de la piel hechos con ingredientes de origen ético, encontrarás todo lo que necesitas para una rutina de belleza consciente y respetuosa con el medio ambiente. ¡Haz que tu belleza brille mientras cuidas el planeta!</p>
                <a href="#" class="btn">Leer más</a>
            </div>
        </div> -->
        <!-- Tarjeta 3 -->
        <!-- <div class="card">
            <img src="https://media.istockphoto.com/id/1317323736/photo/a-view-up-into-the-trees-direction-sky.jpg?s=612x612&w=0&k=20&c=i4HYO7xhao7CkGy7Zc_8XSNX_iqG0vAwNsrH1ERmw2Q=" alt="Descripción">
            <div class="card-content">
                <h2>Descubre la Belleza Natural</h2>
                <p>Explora nuestra selección de productos orgánicos y sostenibles, diseñados para realzar tu belleza de forma natural. Desde cosméticos libres de químicos hasta productos de cuidado de la piel hechos con ingredientes de origen ético, encontrarás todo lo que necesitas para una rutina de belleza consciente y respetuosa con el medio ambiente. ¡Haz que tu belleza brille mientras cuidas el planeta!</p>
                <a href="#" class="btn">Leer más</a>
            </div>
        </div> -->
        <!-- Tarjeta 4 -->
        <!-- <div class="card">
            <img src="https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Descripción">
            <div class="card-content">
                <h2>Descubre la Belleza Natural</h2>
                <p>Explora nuestra selección de productos orgánicos y sostenibles, diseñados para realzar tu belleza de forma natural. Desde cosméticos libres de químicos hasta productos de cuidado de la piel hechos con ingredientes de origen ético, encontrarás todo lo que necesitas para una rutina de belleza consciente y respetuosa con el medio ambiente. ¡Haz que tu belleza brille mientras cuidas el planeta!</p>
                <a href="#" class="btn">Leer más</a>
            </div>
        </div> -->
    </div>
</div>
<br>
<?php
get_footer();?>
