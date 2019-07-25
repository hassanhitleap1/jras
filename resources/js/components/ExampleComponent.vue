<template>
     <div class="container mt-10">
        <h4>unit</h4>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default" v-for="(unit,i) in units">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                              <div class="row">
                                    <div class="col-md-1">
                                        <span  role="button" @click="addLesson(i)" data-toggle="collapse" data-parent="#accordion2" :href="'#collapse'+i" aria-expanded="true" aria-controls="collapseOne" class="fas fa-plus"></span>
                                    </div>
                                    <div class="col-md-10 ">
                                        <input type="text" class="form-control" :value="unit.title" placeholder="add new unit">
                                    </div>
                               </div>
                            </h4>
                        </div>
                        <div :id="'collapse'+i" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2" >
                            <div class="panel-body">
                                <div class="row" v-for="lesson in unit.lessons">
                                    <div class="col-md-1 offset-md-1">
                                        <span  role="button" @click="addLesson(i)" data-toggle="collapse" data-parent="#accordion2" :href="'#collapse'+i" aria-expanded="true" aria-controls="collapseOne" class="fas fa-plus"></span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" :value="unit.title" placeholder="add new unit">
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
               units:[{"title":"this is","desc":"dsdsd","sorting":1 ,"lessons":[{"title":"this is","desc":"dsdsd","sorting":1}, {"title":"this is","desc":"dsdsd","sorting":1},{"title":"this is","desc":"dsdsd","sorting":1}   ]   },
                    {"title":"this is","desc":"dsdsd","sorting":2 ,"lessons":[{"title":"this is","desc":"dsdsd","sorting":1},{"title":"this is","desc":"dsdsd","sorting":1},{"title":"this is","desc":"dsdsd","sorting":1}]},
                    {"title":"this is","desc":"dsdsd","sorting":3}] 
            }
        },
        mounted() {
            console.log('Component mounted.')
        },methods: {
            addLesson(i){
               
            }
        },

    }
</script>
