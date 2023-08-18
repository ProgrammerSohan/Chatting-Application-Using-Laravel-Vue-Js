<template>
   <div class="`alert ${data.class} my-2`">
        {{ data.message }}

   </div>
</template>
<script setup>
    import { reactive } from 'vue';

    const data = reactive({
        message: '',
        class: '',
        show: false
    });


</script>
<style>

</style>
