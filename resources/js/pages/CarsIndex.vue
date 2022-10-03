<template>
    <div>
        <ul>
            <li v-for="car in cars" :key="car.id">
                <h1>{{ car.targa }}</h1>
            </li>
        </ul>
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