<template>
    <div  class="bg-danger" style="height:80vh; width: 80vw">
        <div class="row " style="height: inherit; ">
            <div class="col-4" style="height: inherit; background-color: #6c757d; padding-left: 0; padding-right: 0; ">
                <controll-bar></controll-bar>
                <thread-bar></thread-bar>
                <thread-bar></thread-bar>
                <thread-bar></thread-bar>
            </div>
            <div class="col-8" style="height: inherit">

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
