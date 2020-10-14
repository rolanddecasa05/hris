<template>
    <app-layout>
        <div class="flex flex-row">
            <div class="flex flex-row w-full">

                <div class="flex bg-purple-300 shadow-lg border-blue-500  justify-content item-center px-10 py-10 m-4 w-1/4">
                    
                </div>
                <div class="flex bg-red-vivid-200 shadow-lg border-blue-500  justify-content item-center px-10 py-10 m-4 w-1/4">
                    
                </div>
                <div class="flex bg-teal-vivid-200 shadow-lg border-blue-500  justify-content item-center px-10 py-10 m-4 w-1/4">
                    
                </div>
                <div class="flex bg-indigo-400 shadow-lg border-blue-500  justify-content item-center px-10 py-10 m-4 w-1/4">
                    
                </div>
            </div>
          
        </div> 
    </app-layout>
    
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'

    export default {
        props: {
            users: []
        },
        components: {
            AppLayout
        },
    }
</script>
