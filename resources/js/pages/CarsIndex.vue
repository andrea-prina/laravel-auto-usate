<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div v-for="car in cars" :key="car.id" class="card m-3 p-4 col-4">

                <div class="card-title my-2 text-center">

                    <h2>{{ car.marca }}</h2>

                </div>
                <div class="card-subtitle my-2">

                    <h4>Targa - {{ car.targa }}</h4>
    
                    <h4>Anno - {{ car.anno_immatricolazione }}</h4>
    
                    <h4>Km - {{ car.km }}</h4> 

                </div>

                <div class="card-subtitle my-2">
                    <ul>
                        <li v-for="optional in car.optionals" :key="optional.id">
                            <pre>{{ optional.nome }}</pre>
                        </li>
                    </ul>
                </div>

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