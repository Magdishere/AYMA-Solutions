<template>
    <div class="home-resources-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-home-resources" class="carousel-home-resources">
                        <carousel-3d
                            :perspective="30"
                            :border="0"
                            :width="585"
                            :height="370"
                            :controls-visible="true"
                            :space="500"
                            :clickable="true">

                            <slide :index="0">
                                <img src="https://loremflickr.com/585/370/paris/?random=1" />
                            </slide>

                            <slide :index="1">
                                <img src="https://loremflickr.com/585/370/paris/?random=2" />
                            </slide>

                            <slide :index="2">
                                <img src="https://loremflickr.com/585/370/paris/?random=3" />
                            </slide>

                        </carousel-3d>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import {Carousel3d, Sl} from 'vue-carousel-3d';

export default {
        components: {
            Carousel3d,
            Slide
},
        mounted() {
            console.log('Component mounted.')
        }

    }
</script>
