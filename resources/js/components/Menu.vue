<template>
    <div>
        <b-navbar toggleable="lg" type="dark" variant="dark">
            <b-navbar-brand href="#">
                <img :src="'./frontend/assets/images/logo/logo.png'" height="80" alt="Site Logo" />
            </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav class="mx-auto">
                    <b-nav-item href="https://conectamayor.cl">Inicio</b-nav-item>
                    <b-nav-item href="https://conectamayor.cl/quienes-somos/">Quiénes Somos</b-nav-item>
                    <b-nav-item href="https://conectamayor.cl/nuestras-iniciativas/">Nuestras Iniciativas</b-nav-item>
                    <b-nav-item href="#">Transparencia</b-nav-item>
                    <b-nav-item href="https://conectamayor.cl/contacto-usuario/">Contactanos</b-nav-item>
                    <b-nav-item href="https://conectamayor.cl/blog/">Blog</b-nav-item>
                    <b-nav-item href="https://conectamayor.cl/faq/">Preguntas Frecuentes</b-nav-item>
                </b-navbar-nav>

                <b-navbar-nav class="ml-auto" sty>
                    <b-nav-item href="https://instagram.com/conectamayor/"><i class="fa-brands fa-instagram"></i></b-nav-item>
                    <b-nav-item href="https://www.facebook.com/ConectaMayor/"><i class="fa-brands fa-facebook"></i></b-nav-item>
                    <b-nav-item href="https://www.twitter.com/ConectaMayor"><i class="fa-brands fa-twitter"></i></b-nav-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
    export default {
    }
</script>
<style scoped>
.navbar.navbar-dark.bg-dark {
    background-color: #fff !important;
}
.nav-item.nav-item.nav-item a {
    color: #464646 !important;
    font-family: 'Alvar-Essential';
    opacity: 1;
    letter-spacing: 0.28px;
    font-size: 17px;
}
.nav-item.nav-item.nav-item a:hover {
    color: #F05C68 !important;
    font-family: 'Alvar-Essential';
    opacity: 1;
    letter-spacing: 0.28px;
    font-size: 17px;
}
.nav-item.nav-item.nav-item a:hover {
    color: #F05C68 !important;
    font-family: 'Raleway';
    opacity: 1;
    letter-spacing: 0.28px;
    font-size: 14px;
}
.navbar-toggler {
  border-color: #000;
} 
</style>