<template>
    <app-layout>
        <div class="flex flex-row w-full">
            <div class="w-full flex justify-center items-center ">
                <div class="bg-blue-grey-100 h-100 p-10 border border-blue-grey-300 shadow-xl">
                    <h1 class="text-purple-400 text-2xl font-bold text-center">User Component</h1>
                </div>
            </div>
            <div>
                <!-- content goes here -->
            </div>
            
        </div>
    </app-layout>
    
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'

    export default {
        props: {
            users: Array
        },
        components: {
            AppLayout
        },
        methods: {

        },
        mounted() {
            
        }
    }
</script>
