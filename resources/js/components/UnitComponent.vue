<template>
     <div class="container mt-10">
        <h4>unit</h4>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default" >
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                              <div class="row">
                                    <div class="col-md-1">
                                        <span class="fas fa-plus" @click="addUnit()"></span>
                                    </div>
                                    <div class="col-md-10 ">
                                        <input type="text" class="form-control" v-model="title" placeholder="add new unit " @keyup.enter="addUnit()">
                                    </div>
                               </div>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default" v-for="(unit,i) in units">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                              <div class="row">
                                    <div class="col-md-1">
                                        <span  role="button"  @click="unit.collapse=!unit.collapse" data-toggle="collapse" data-parent="#accordion2" :href="'#collapse'+i" aria-expanded="true" aria-controls="collapseOne" :class="whatClass(i)"></span>
                                    </div>
                                    <div class="col-md-10 ">
                                        <input type="text" class="form-control" :value="unit.title" placeholder="add new unit " @keyup.enter="addlesson()">
                                    </div>
                               </div>
                            </h4>
                        </div>
                        <div :id="'collapse'+i" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2" >
                            <div class="panel-body">
                                <div class="row" >
                                        <div class="col-md-1 offset-md-1">
                                            <span   @click="addlesson(i)" :class="'isCollapsed(i)'"></span>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"placeholder="add new unit" v-model="lessontitle" @keyup.enter="addlesson(i)">
                                        </div>
                                </div>
                                <div class="row" v-for="lesson in unit.lessons">
                                    <div class="col-md-1 offset-md-1">
                                        <a :href="'#'"  class="far fa-eye"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" :value="lesson.title" placeholder="add new unit">
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
                collapse:false,
                title:"",
                desc:"",
                sorting:"",
                lessons:{},
                lessontitle:"",
               units:[{"title":"this is","desc":"dsdsd","sorting":1 ,"lessons":[{"title":"this is","desc":"dsdsd","sorting":1} ] ,"collapse":false },
                    {"title":"this is","desc":"dsdsd","sorting":2 ,"lessons":[{"title":"this is","desc":"dsdsd","sorting":1}] ,"collapse":false}] 
            }
        },computed: {
             
        },
        mounted() {
            console.log('Component mounted.')
        },methods: {
            addUnit(){
                if(this.title == ""){
                    return true;
                }

            this.units.push({"title":this.title,"desc":this.desc,"sorting":1 ,"lessons": this.lesson ,"collapse":false})
            this.title="";
            },
            addlesson(i){
                if(this.lessontitle == ""){
                    return true;
                }
                  this.units[i].lessons.push({"title":this.lessontitle,"desc":"dsdsd","sorting":1});
                  this.lessontitle="";
            }, 
            whatClass(i){
                if(this.units[i].collapse){
                    return "fas fa-minus-square";
                }else{
                  return "fas fa-plus" ;
                }
            }
        },

    }
    // <i class="fas fa-minus-square"></i>
</script>
