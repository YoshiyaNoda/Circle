<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component2aaaaa</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <div class="btnWrapper">
                        <router-link to="/f">to 1</router-link>
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
