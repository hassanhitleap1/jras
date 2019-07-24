<template>
     <div class="container mt-10">
        <h4>unit</h4>
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="panel-group" :id="'accordion'+n" role="tablist" aria-multiselectable="true" v-for="n in 10">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" :id="'heading'+n">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" :data-parent="'#accordion'+n" :href="'#collapse'+n" aria-expanded="true" :aria-controls="'collapse'+n">
                                    <div class="">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
