<template>
    <div>
        <div id="jumbotron" class="position-relative">
            <div class="d-flex">
                <video width="100%" autoplay loop plays-inline>
                    <source src="images/EagleLabLoop-Site.webm" type="video/webm">
                </video>
            </div>
            <div class="position-absolute top-50 start-50 translate-middle text-white">
                <p class="fs-2">
                    Non hai visto un albero finchè non hai visto la sua ombra dal cielo
                </p>
                <hr class="m-auto my-2 opacity-100">
                <small class="fs-6">Amelia Earhart</small>
            </div>
            <!-- <div class="container-fluid h-25"></div> -->
            <div id="gradient"></div>
        </div>
        <div class="tools__container d-flex justify-content-center justify-content-md-center justify-content-lg-start align-items-center">
            <div class="tools__items d-flex flex-column align-items-start gap-3 text-start text-white lh-base">
                <h2>
                    Droni all'avanguardia
                </h2>
                <p class="fs-5">
                    per svolgere al meglio attività di rilievo, ispezioni, fotogrammetria e servizi fotografici
                </p>
                <router-link to="/tool" class="btn btn-outline-warning px-4 py-2 rounded-0 border border-warning border-2 text-light fw-light">Scopri di più</router-link>
            </div>
        </div>
        <div class="pilot__container d-flex justify-content-center justify-content-md-center justify-content-lg-end align-items-center mb-5">
            <div class="pilot__items d-flex flex-column align-items-start gap-3 text-start text-dark lh-base">
                <h2>
                    Piloti APR certificati
                </h2>
                <p class="fs-5 text-secondary">
                    Svolgiamo attività specializzate in situazioni critiche
                </p>
                <router-link to="/service" class="btn btn-outline-warning px-4 py-2 rounded-0 border border-warning border-2 text-dark fw-light">Scopri di più</router-link>
            </div>
        </div>
        <div>
            <h1 class="p-4">I nostri servizi</h1>
            <div class="services__container d-flex flex-wrap justify-content-center align-items-center gap-4 my-5 text-white">
                <div v-for="(service, index) in serviceList" :key="index" class="services__image position-relative d-flex flex-column bg-dark animate__animated animate__backInUp">
                    <img :src="service.img" :alt="service.title" class="img-fluid opacity-50 shadow">
                    <div class="services__text position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-start align-items-center p-5 w-100">
                        <h4 class="lh-lg">{{ service.title }}</h4>
                        <p>{{ service.desc }}</p>
                        <a href="/service" class="fs-5 text-white animate__animated animate__bounceInLeft"><i class="fas fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drone__media d-flex flex-wrap justify-content-center gap-3">
            <div v-for="(photo, index) in mediaList" :key="index">
                <a :href="photo.img"><img :src="photo.img" class="img-fluid" alt="Boat on Calm Water"/></a>
            </div>
            <!-- area YouTube -->
            <div class="container-fluid d-flex justify-content-center align-items-center gap-5 mb-5">
                <video width="100%" controls>
                    <source src="images/EagleLabLoop-Site.webm" type="video/webm">
                </video>
                <div class="d-flex flex-column align-items-start gap-3 ms-0 ms-lg-5 my-5 text-start">
                    <h2>Eagle Lab YouTube</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolore ad aspernatur ratione aperiam quos saepe adipisci. Accusantium reiciendis exercitationem earum tempore suscipit quidem officiis incidunt, ratione iure, asperiores minus!</p>
                    <a href="#" class="btn btn-outline-warning px-4 py-2 rounded-0 fw-light">Visita il nostro canale YouTube</a>
                </div>
            </div>
        </div>

        <!--  -->
        <!-- TODO: area sponsor se presente -->
        <!--  -->
    </div>
</template>

<script>
export default {
    name: 'PageHome',
    data() {
        return {
            serviceList: [
                {
                    img: 'public/images/S-Andrea-Pano.jpg',
                    title: "Riprese aeree",
                    desc: "Acquisizione immagini e riprese mediante l'utilizzo del drone"
                },
                {
                    img: "https://www.cadlinesw.com/wp-content/uploads/2021/08/software-bim-cadline.jpg",
                    title: "Ricostruzione 2D e 3D",
                    desc: "Ricostruzione modelli grafici grazie ai software odierni"
                },
                {
                    img: 'public/images/Consulting.jpg',
                    title: "Consulenze tecniche",
                    desc: "Consulto tecnico per infortunistica stradale"
                }
            ],
            mediaList: [
                {
                    id: 0,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 1,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 2,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 3,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 4,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 5,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 6,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 7,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 8,
                    img: "https://loremflickr.com/320/240"
                },
                {
                    id: 9,
                    img: "https://loremflickr.com/320/240"
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
#jumbotron {

    video {
        //width: 100%;
        height: 90vh;
        object-fit: cover;
        image-rendering:pixelated;
        //object-position: top;

        @media screen and (max-width: 768px) {
            height: 70vh;
        }
    }

    hr {
        width: 45px;
        border: 1px solid #f5bc41;
    }

    #gradient {
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 600;
        width: 100%;
        height: 190px;
        background: url('/images/gradient.png');
        background-size: cover;
    }
}

.tools__container {
    height: 80vh;
    background-color: #2E2E37;
    background-image: url('/images/mavic.png');
    background-position: bottom 200px left 800px;
    background-size: 55%;
    background-repeat: no-repeat;

    @media screen and (max-width: 849px) {
        height: 40vh;
        background-position: top left 300px;
        background-size: cover;
    }

    @media screen and (max-width: 575px) {
        height: 60vh;
        background-position: top left;
        background-size: cover;
    }

    .tools__items {
        margin: 0 100px;

        h2 {
            color: #f5bc41;
        }

        p {
            padding: 3px 30px;
            border-left: 4px solid #fff;
            font-weight: 100;
        }
    }
}

.pilot__container {
    height: 80vh;
    background-image: url('/images/Apr-Pilot.png');
    background-size: 70%;
    background-repeat: no-repeat;

    @media screen and (max-width: 768px) {
        height: 40vh;
        background-image: none;
    }

    @media screen and (max-width: 575px) {
        height: 40vh;
        background-image: none;
    }

    .pilot__items {
        margin: 0 100px;

        h2 {
            color: #2c3e50;
        }

        p {
            padding: 3px 30px;
            border-left: 4px solid #a7a7a7;
            font-weight: 100;
        }
    }
}

.services__container {

    .services__image {
        overflow: hidden;

        img {
            width: 450px;
            height: 450px;
            object-fit: cover;

            &:hover {
                transform: scale(1.5);
                filter: grayscale(90%);
                transition: all 2s linear;
            }

            &:not(:hover) {
                transform: scale(1);
                transition: all 1.5s ease-in-out;
            }
        }

        .services__text {

            h4 {
                color: #f5bc41;
                font-weight: 500;
            }

            p {
                font-weight: 400;
            }

            a {
                animation-delay: .5s;
            }
        }
    }
}

.drone__media {
    margin-top: 180px;

    img {
        object-fit: cover;
        height: 253px;

        &:hover {
            box-shadow: 0 6px 10px #a7a7a7;
            opacity: 70%;
            transform: scale(1.03);
            transition: all .3s ease-in-out;
        }

        &:not(:hover) {
            transform: scale(1);
            transition: all .3s ease-in-out;
        }
    }

    .container-fluid {
        margin-top: 150px;
        padding: 0 130px;

        @media screen and (max-width: 1399px) {
            display: flex;
            flex-direction: column;
        }

        video {

            @media screen and (max-width: 444px) {
                width: 330px;
            }
        }

        p {
            padding: 3px 30px;
            border-left: 4px solid #a7a7a7;
            font-weight: 100;
        }
    }
}
</style>
