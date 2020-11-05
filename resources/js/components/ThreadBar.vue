<template>
    <div @click="print">
        <div>
            <div class="row p-4 " style="margin-left:0;">
                <div class="col-7">
                    <h6 class="m-0 text-left text-white"> {{threadName}} </h6>
                </div>
                <div class="col-5">
                    <p class="m-0 text-white">{{lastSeen}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ThreadBar",
        data(){
            return{
                threadName:"Jazib",
                lastSeen:"2pm"
            }
        },
        methods:{
            print(){
                var date = new Date();
                console.log(date.getTime())
            }
        }
    }
</script>

<style scoped>

</style>
