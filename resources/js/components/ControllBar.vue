<template>
    <div>
        <div class="bg-grey">
            <div class="row py-2 px-4">
                <div class="col-8 text-left align-middle "> <h6 class="align-middle text-white"> {{this.userName}} </h6></div>
                <div class="col-4">
                    <li v-if="active" class="color-acive fas fa-circle"></li>
                    <li v-else class="color-inactive fas fa circele"></li>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "ControllBar",
        data(){
            return {
                userName:'UMAIR',
                active:true,
            }
        }
    }
</script>

<style scoped>
    .color-acive{
        color: green;
    }
    .color-inactive{
        color: #6c757d;
    }
    .bg-grey{
        background-color: #3b4044;
    }

</style>
