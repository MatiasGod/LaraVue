<template>
    <div class="row">
        <div class="col-sm-4">
            <h1>VUEjs y Laravel</h1>
            <ul class="list-group">
                <li v-for="item in lists" class="list-group-item">                      
                    {{ item.id }} <strong>{{ item.name }}</strong>
                </li>
            </ul>
        </div>
        <div class="col-sm-8">
            <h1>JSON</h1>
            <pre>
                {{ $data }}
            </pre>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        /* created: function() {
            this.getTask();
        }, */
        data() {
            return  {
                lists: []
            }
        },// Normal sin AJAX
        /* methods: {
            getTask: function() {
                axios.get('task').then(response => {
                    this.lists = response.data;
                    console.log(this.lists);
                });
            }
        } */
        // AJAX 
        mounted() {
            axios.get('task').then(response => {this.lists = response.data});
        },
    };
</script>
