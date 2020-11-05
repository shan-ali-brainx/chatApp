<template>
    <div>
        <form class="chatInput">
            <div class="form-group row">
                <div class="col-10">
                    <input v-model="this.text" class="form-control" placeholder="Enter Mesasge">
                </div>
                <div class="col-2">
                    <a><li class="fas fa-send"></li></a>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "ChatBox",
        data(){
            return{
                text:"",
            }
        }
    }
</script>

<style scoped>

</style>
