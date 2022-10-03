<template>
    <div class="container">
        <div v-for="car in cars" :key="car.id" class="card my-4 p-3 mx-auto">
            <div class="card-title my-2">
                <h1>{{ car.marca }}</h1>
            </div>
            <div class="card-subtitle my-2">
                <span>{{ car.targa }} - {{ car.anno_immatricolazione }} - km.{{ car.km }}</span>
            </div>
            <div class="card-subtitle my-2">
                <span v-for="optional in car.optionals" :key="optional.id">
                    {{ optional.nome }}
                </span>
            </div>
        </div>
    </div>
</template>

<script>

import axios from 'axios';

export default {

    name : "CarsIndex",

    data : function(){
        return {
            cars : [],
        }
    },

    methods : {

        getCars() {
            axios.get("/api/cars", {}).then((response) => {
                console.log(response);
                this.cars = response.data.results.data;
            }).catch((error) => {
                console.warn(error);
            });
        }

    },

    created(){
        this.getCars();
    }

}
</script>

<style>

</style>