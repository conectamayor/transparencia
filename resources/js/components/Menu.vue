<template>
    <div>
        <b-navbar toggleable="lg" type="dark" variant="dark">
            <b-navbar-brand href="#">
                <img :src="'./frontend/assets/images/logo/logo.png'" height="80" alt="Site Logo" />
            </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav class="ml-auto" style="margin-right: -50px !important;">
                    <b-nav-item style="margin-top: 10px !important;" href="https://conectamayor.cl">Inicio</b-nav-item>
                    <b-nav-item style="margin-top: 10px !important;" href="https://conectamayor.cl/quienes-somos/">Quiénes somos</b-nav-item>
                    <b-nav-item style="margin-top: 10px !important;" href="https://conectamayor.cl/nuestras-iniciativas/">Nuestras iniciativas</b-nav-item>
                    <b-nav-item style="margin-top: 10px !important;" href="#">Transparencia</b-nav-item>
                    <b-nav-item style="margin-top: 10px !important;" href="https://conectamayor.cl/contacto-usuario/">Contacto</b-nav-item>
                    <b-nav-item style="margin-top: 10px !important;" href="https://conectamayor.cl/blog/">Blog</b-nav-item>
                    <b-nav-item href="https://conectamayor.cl/aportar/"><button type="button" style="background-color: #F05C68 !important;" class="btn btn-dark">Aportar</button></b-nav-item>
                </b-navbar-nav>

                <b-navbar-nav class="ml-auto">
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
    letter-spacing: 0.28px;
    font-size: 15px;
}
.nav-item.nav-item.nav-item a:hover {
    color: #F05C68 !important;
    font-family: 'Alvar-Essential';
    letter-spacing: 0.28px;
    font-size: 15px;
}
.nav-item.nav-item.nav-item a:hover {
    color: #F05C68 !important;
    font-family: 'Alvar-Essential';
    letter-spacing: 0.28px;
    font-size: 15px;
}
.navbar-toggler {
  border-color: #000;
} 
</style>